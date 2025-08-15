<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
     Public function index(){
    $Roles=Role::all();
    return view('admin.UserManage.Role',compact('Roles'));
    }

    public function storeRole(Request $request){

        $request->validate([
            'role_name'=>'required',
        ]);
        Role::create(['name'=>$request->role_name]);

        return redirect()->back()->with('success','Role add Succesfully!');
    }

    public function updateRole(Request $request){
         $request->validate([
            'role_name'=>'required',
            'role_id'=>'required',
        ]);
        $update=Role::find($request->role_id);
        $update->name = $request->role_name;
        
        $update->save();

        return redirect()->back()->with('success','Permission edit Succesfully!');
    }

    public function deleteRole($id){
        $Roles=Role::find($id);
        $Roles->delete();

        return redirect()->back()->with('success','Permission delete Succesfully!');
    }

    public function givePermissionToRole($id){
        $Permissions=Permission::all();
        $Role=Role::findorFail($id);

     $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
       ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();


       return view('admin.UserManage.givePermissionToRole',compact('Permissions','Role','rolePermissions'));
    }

    public function giveRoleToPermission(Request $request,$role_id){
        $request->validate([
            'permissions' => 'required',

        ]);
        $Role = Role::findOrFail($role_id);
        $Role->syncPermissions($request->permissions);

        return redirect()->back()->with('success','Permission added successfully! ');

    }
    
}


