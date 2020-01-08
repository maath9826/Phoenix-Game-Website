<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admins.adminsCreate');

    }

    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|min:3|max:50|unique:users',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);
        $admin = new User();

        $admin->name = request('name');
        $admin->email = request('email');
        $admin->password = bcrypt(request('password'));
        $admin->save();

        return redirect('/l2admin/admins');

    }

    public function destroy($id)
    {

        if($id == 1){
            abort(403);
        }
        User::where('id' , $id)->delete();
        return redirect('/l2admin/admins');
    }

}
