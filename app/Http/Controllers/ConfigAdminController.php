<?php

namespace App\Http\Controllers;

use App\Models\ConfigAdmin;
use Illuminate\Http\Request;

class ConfigAdminController extends Controller
{
    //
    public function index()
    {   
        $id = 1;
        $config = ConfigAdmin::find($id);
        return view('admin.adminConfig', [
            "title" => "Admin"
        ])->with('config', $config);
    }
    public function update(Request $request, $id)
    {
        $employee = ConfigAdmin::find($id);
        $input = $request->all();
        $employee->update($input);
        return redirect('admin/config');
    }
}
