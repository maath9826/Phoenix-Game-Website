<?php

namespace App\Http\Controllers;


use App\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function edit(Email $email)
    {
        return view('settings.editEmail',compact('email'));

    }


    public function update(Email $email)
    {
        request()->validate([
            'email' => 'required',
        ]);;

        $email->email = request('email');

        $email->save();

        return redirect('/l2admin/settings');
    }

}
