<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Http\Requests\RoleRequest;
use DB;
use Auth;
use Illuminate\Support\Facades\View;
use DataTables;

class RoleController extends Controller
{
    public function get_index(Request $request)
    {
        $user = Auth::user();

        $permissions = DB::table('permission_user')
            ->where('user_id', $user->id)
            ->join('permissions', 'permission_user.permission_id', '=', 'permissions.id')
            ->select(['permissions.slug'])
            ->where('permissions.slug', 'ver-roles')
            ->get()
            ->toArray();

        if (!count($permissions)) {
            return redirect('/admin/dashboard');
        }
       
        return View::make('admin.roles.datatable');
    }

    public function get_datatable(Request $request)
    {
        $role_id = $request->role_id;
        
        $result = DB::table('roles')
            ->select('id', 'name', 'description')
            ->where('deleted_at', NULL);

        return DataTables::of($result)
		->escapeColumns('Actions')
        ->addColumn('Actions', function($model)
        {
            // if ($role_id == 3) {

            //     return "
            //                 <button class='btn btn-primary btn-sm solsoShowModal' data-toggle='tooltip' title='Editar' value=$model->id OnClick='Editar(this);'>
            //                 <i class='fa fa-edit'></i>
            //                 </button>";
            // }

            return "<button class='btn btn-primary btn-sm solsoShowModal' data-toggle='tooltip' title='Editar' value=$model->id OnClick='Editar(this);'>
                    <i class='fa fa-edit'></i>
                    </button>
                    <button class='btn btn-danger btn-sm solsoConfirm' data-toggle='modal' data-title='Slider' title='Eliminar' value=$model->id OnClick='Eliminar(this);'>
                      <i class='fa fa-trash'></i>
                    </button>";

        })->make();
    }

    public function store(RoleRequest $request)
    {
        $data = $request->except(['id']);
        $data['slug'] = str_slug($data['name']);
        $role = new Role();
        $role->fill($data);
        $role->save();

        return response()->json(['title' => 'Operación Exitosa', 'message' => 'Se ha creado correctamente', 'symbol' => 'success'], 200);
    }

    public function show($id)
    {
        $role = DB::table('roles')->where('id', $id)
            ->first();

        return response()->json($role); 
    }

    public function update($id, RoleRequest $request)
    {
        $data = $request->except(['id']);
        $data['slug'] = str_slug($data['name']);

        $role = Role::find($id);
        $role->fill($data);
        $role->save();

        return response()->json(['title' => 'Operación Exitosa', 'message' => 'Se ha actualizado correctamente', 'symbol' => 'success'], 200);
    }

    public function delete($id)
    {
        $users_with_this_role = DB::table('users')
            ->where('deleted_at', NULL)
            ->get()->toArray();

        if (count($users_with_this_role)) {
            return response()->json(['title' => 'Advertencia', 'message' => 'Existen usuarios asignados a ese rol.', 'symbol' => 'false'], 400);
        }

        $role = Role::find($id);
        $role->delete();
        return response()->json(['title' => 'Operación Exitosa', 'message' => 'Se ha eliminado correctamente', 'symbol' => 'success'], 200);
        
    }

}
