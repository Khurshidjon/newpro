<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Country;
use App\degree_of_hazard;
use App\Permission;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Role;
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
/*        $this->authorize('view', User::class);*/

            $users = User::all();
            $permissions = Permission::all();
            $roles = Role::all();

            return view('Admin.tables', ['users' => $users, 'permissions' => $permissions, 'roles' => $roles]);
    }
    public function usersList()
    {
/*        $users = DB::table('users')->join('role_user', 'role_user.user_id', '=', 'users.id')->join('roles', 'role_user.role_id', '=', 'roles.id')->select('users.name', 'users.email', 'roles.roles')->get();*/
/*            $users = User::with('user_roles', 'user_permissions')->get();*/
            $users = User::all();
            return response()->json($users);

    }
    public function userShow($id)
    {
/*        $this->authorize('view', User::class);*/
        $user = User::find($id);
        return view('Admin.viewUser', ['user' => $user]);
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
        $result = DB::table('users')->where('name','LIKE',  '%'. $request->input('search') .'%')->orWhere('email', 'LIKE', '%'. $request->input('search') .'%')->get();
        return response()->json($result);
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
        $user->user_permissions()->attach($permission);
        return back();
    }
    public function detachPermission(User $user, Permission $permission)
    {
        $user->user_permissions()->detach($permission);
        return back();
    }
    public function attachRole(User $user, Role $role)
    {
        $user->user_roles()->attach($role);
        return back();
    }
    public function detachRole(User $user, Role $role)
    {
        $user->user_roles()->detach($role);
        return back();
    }
}
