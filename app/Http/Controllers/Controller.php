<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminConfig()
    {
        return view('admin.adminConfig', [
            "title" => "Admin"
        ]);
    }

    public function adminCreate()
    {
        return view('admin.adminCreate', [
            "title" => "Admin"
        ]);
    }
}
