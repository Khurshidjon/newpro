<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Country;
use App\degree_of_hazard;
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
            $users = User::paginate(3);
            $permissions = Permission::get();
            $roles = Role::get();
            return view('Admin.tables', ['users' => $users, 'permissions' => $permissions, 'roles' => $roles]);
    }
    public function usersList()
    {
     //
    }
    public function userShow($id)
    {
/*        $this->authorize('view', User::class);*/
        $user = User::find($id);
        return view('Admin.viewUser', ['user' => $user]);
    }
    public function userEdit($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        $permissions = Permission::get();
        return view('Admin.editUser', ['user' => $user, 'roles' => $roles, 'permissions' => $permissions]);
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
        $role->permissions()->attach($permission);
        return back();
    }
    public function detachPermissionFromRole(Role $role, Permission $permission)
    {
        $role->permissions()->detach($permission);
        return back();
    }
}
