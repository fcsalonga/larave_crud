<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = "password";
        $data->save();
        return redirect('/user');
    }

    public function index()
    {
        $getData = User::orderBy("name")->get();
        return view('user.index', compact('getData'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function edit($id)
    {
        $getData = User::where("id",$id)->get();
        return view('user.edit', compact('getData'));
    }

    public function update(Request $request, $id)
    {
        $data = User::where("id",$id)
        ->update([
            'name' => $request->name, 
            'email' => $request->email
        ]);
          
        return redirect('/user');
    }

    public function destroy($id)
    {
        
        $data = User::find($id);
        $data->delete();

        return redirect('/user');
    }

    public function show($id)
    {
        # code...
    }
}
