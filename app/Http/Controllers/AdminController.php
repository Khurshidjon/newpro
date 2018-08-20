<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Country;
use App\degree_of_hazard;
use App\Product;
use Cviebrock\EloquentSluggable\Tests\Models\Post;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->middleware('superadmin')->only(['attachPermissionToRole', 'detachPermissionFromRole', 'permissionStatus']);
    }
    public function isAdmin()
    {
        $comments = Comment::all();
        $countComment = $comments->count();
        return view('Admin.index', ['comments' => $comments, 'countComments' => $countComment]);
    }
    public function loginAdmin()
    {
        return view('Admin.login');
    }
    public function lists()
    {
            $users = User::paginate(7);
            $permissions = Permission::get();
            $roles = Role::get();
            return view('Admin.tables', ['users' => $users, 'permissions' => $permissions, 'roles' => $roles]);
    }

    public function userShow($id)
    {
        $user = User::find($id);

        return view('Admin.viewUser', ['user' => $user]);
    }



    public function addNewUserPage()
    {
        $roles = Role::all();
        return view('Admin.addNewUser', compact('roles'));
    }


    public function registerUser(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'userByUser' => 'required',
        ]);
        $roleUser = $request->get('userByUser');

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->isAdmin = 1;
        $newUser->parent_id = Auth::id();


        $newUser->save();
            if (Auth::user()->hasRole('Superadmin')){
                $permForSuperadmin = Permission::where($roleUser, '=', 1)->get();
            }else{
                $permForAdmin = Permission::where('childOfAdmin', '=', 1)->get();
            }
            $rolesByAuth = Auth::user();
            $roleForSuperAdmin = Role::where('name', '=', $roleUser)->select('id')->get();
            $roleForAdmin = Role::where('name', '=', 'ChildOfAdmin')->select('id')->get();

        foreach ($rolesByAuth->roles as $role) {
            if ($role->name === 'Superadmin') {
                $newUser->roles()->attach($roleForSuperAdmin);
                $newUser->permissions()->attach($permForSuperadmin);
                $newUser->update(['parent_id' => Auth::id()]);
            }elseif($role->name === 'Admin'){
                $newUser->roles()->attach($roleForAdmin);
                $newUser->permissions()->attach($permForAdmin);
                $newUser->update(['parent_id' => Auth::id()]);
            }
        }
        return redirect()->route('admin.lists');
    }



    public function userEdit($id)
    {
        $rolesByUser = User::find($id);
        $roles = Role::get();
        foreach ($rolesByUser->roles as $role){
            if($role->id == 1){
                $where = 'Superadmin';
            }elseif ($role->id == 2){
                $where = 'Admin';
            }elseif ($role->id == 3){
                $where = 'ChildOfAdmin';
            }elseif ($role->id == 4){
                $where = 'User';
            }
            $permissions = Permission::where($where, '=', 1)->get();
        }
        return view('Admin.editUser', ['user' => $rolesByUser, 'roles' => $roles, 'permissions' => $permissions]);
    }


    public function userUpdate(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'old_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ( ! $request->input('new_password') == '')
        {
            $user->password = bcrypt($request->input('new_password'));
        }
        $user->save();
        return json_encode($user);
    }




    public function userSearch(Request $request)
    {
        $permissions = Permission::all();
        $roles = Role::all();
        $result = User::where('name','LIKE',  '%'. $request->input('search') .'%')->orWhere('email', 'LIKE', '%'. $request->input('search') .'%')->get();
        return redirect()->route('admin.lists', ['tableUsers' =>$result]);
    }



    public function create()
    {
        $categories = Category::all();
        $countries = Country::all();
        $degree_of_hazards = degree_of_hazard::all();

        return view('Admin.add', ['categories' => $categories, 'countries' => $countries, 'degree_of_hazards' => $degree_of_hazards]);

    }



    public function attachPermission(User $user, Permission $permission)
    {
        $user->permissions()->attach($permission);
        return back();
    }



    public function detachPermission(User $user, Permission $permission)
    {
        $user->permissions()->detach($permission);
        return back();
    }



    public function attachRole(User $user, Role $role)
    {
        $user->roles()->attach($role);
        return back();
    }



    public function detachRole(User $user, Role $role)
    {
        $user->roles()->detach($role);
        return back();
    }



    public function addRolePage()
    {
        $roles = Role::get();
        return view('Admin.roles', compact(['roles']));
    }



    public function RoleToPermission(Role $role)
    {
        $permissions = Permission::get();
        return view('Admin.roleToPermission', compact(['role', 'permissions']));
    }



    public function attachPermissionToRole(Role $role, Permission $permission)
    {
        $role->givePermissionTo($permission);
        return back();
    }



    public function detachPermissionFromRole(Role $role, Permission $permission)
    {
        $role->revokePermissionTo($permission);
        return back();
    }


    public function productsPage()
    {
        $rolesByAuth = Auth::user();
            $products = Product::all();
        return view('Admin.products', compact('products'));
    }




    public function productStatus(Request $request)
    {
        $product = Product::where('id', '=', $request->productId)->update([
            'status' => $request->status,
        ]);
        return $request->status;
    }

    public function addRoleToPermission()
    {
        $permissions = Permission::all();
        return view('Admin.permissionHasRole', compact('permissions'));
    }

    public function permissionStatus(Request $request)
    {
        if(isset($request->status1)){
            Permission::where('id', '=', $request->permissionId)->update([
                'Superadmin' => $request->status1
            ]);
        }elseif (isset($request->status2)){
            Permission::where('id', '=', $request->permissionId)->update([
                'Admin' => $request->status2
            ]);
        }elseif (isset($request->status3)){
            Permission::where('id', '=', $request->permissionId)->update([
                'childOfAdmin' => $request->status3
            ]);
        }elseif (isset($request->status4)){
            Permission::where('id', '=', $request->permissionId)->update([
                'user' => $request->status4
            ]);
        }
        return 'success';
    }

    public function userUserDelete(User $user)
    {
        $user->delete();

        foreach ($user->permissions() as $permission){
            $user->permissions()->detach($permission);
        }
        foreach ($user->roles() as $role){
            $user->roles()->detach($role);
        }

        return back()->with('message', 'User deleted successfully');
    }

}
