<?php

namespace App\Http\Controllers;

use App\Models\ConfigAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if($request->has('logo')){
            $path = Storage::disk('public')->putFile('logo', $request->file('logo'));
            $employee->foto = $path;
        }
        $employee->name = $request['name'];
        $employee->address = $request['address'];
        $employee->email = $request['email'];
        $employee->contact = $request['contact'];
        $employee->save();
        // $input = $request->all();
        // $employee->update($input);
        return redirect('admin/config');
    }
}
