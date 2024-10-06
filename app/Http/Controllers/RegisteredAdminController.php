<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredAdminController extends Controller
{
    public function create(Request $request)
    {
        dd($request->all());
        return "Hello Admin!";
//        return view('admin.create');
    }
}
