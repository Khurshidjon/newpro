<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\degree_of_hazard;
use App\Permission;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Role;
class AdminController extends Controller
{
    public function isAdmin()
    {
        return view('Admin.index');
    }
    public function loginAdmin()
    {
        return view('Admin.login');
    }
    public function lists()
    {
              $users = User::all();
              $permissions = Permission::all();
              $roles = Role::all();

              return view('Admin.tables', ['users' => $users, 'permissions' => $permissions, 'roles' => $roles]);
    }
    public function userList()
    {
        $users = User::all();
            return response()->json($users);

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
