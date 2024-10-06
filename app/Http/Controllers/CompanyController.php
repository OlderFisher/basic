<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return "Company Index";
    }

    public function edit($id)
    {
        return "Company Edit: $id";
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
        return "Company Update: $id";
    }

    public function destroy($id)
    {
        return "Company Destroy: $id";
    }
}
