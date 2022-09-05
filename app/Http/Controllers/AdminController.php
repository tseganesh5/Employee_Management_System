<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return view('admin.index')->with('admin',$admin);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        admin::create($input);
        return redirect('admin')->with('flash_message', 'admin Added!');
    }

    public function show($id)
    {
        $admin = admin::find($id);
        return view('admin.show')->with('admin',$admin);
    }

    public function edit($id)
    {
        $admin = admin::find($id);
        return view('admin.edit')->with('admin',$admin);
    }

    public function update(Request $request, $id)
    {
        $admin = admin::find($id);
        $input = $request->all();
        $admin::update($input);
        return redirect('admin')->with('flash_message','admin Updated!');
    }

    public function destroy($id)
    {
        admin::destroy($id);
        return redirect('admin')->with('flash_message','admin Deleted!');
    }
}
