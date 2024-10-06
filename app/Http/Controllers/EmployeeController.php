<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return "Employee Index";
    }
    public function create()
    {
        return "Employee Create";
    }
    public function store(Request $request)
    {
        dd($request->all());
        return "Employee Store";
    }
    public function show($id)
    {
        return "Employee Show: $id";
    }
    public function edit($id)
    {
        return "Employee Edit: $id";
    }
    public function update(Request $request, $id)
    {
        dd($request->all());
        return "Employee Update: $id";
    }
    public function destroy($id)
    {
        return "Employee Destroy: $id";
    }
}
