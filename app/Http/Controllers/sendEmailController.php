<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;
use App\Email;

class sendEmailController extends Controller
{
    public function sendEmail(){

            // Mail::raw('Now I know how to send emails with Laravel', function($message)
            //  {
            //      $message->subject('Hi There!!');
            //      $message->from(config('mail.from.address'), config("app.name"));
            //      $message->to('steelsinew@gmail.com');
            //  });


        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $data = array (
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message'),
            )        ;

            // $data = (object) $data1;


        //  $damn = new sendEmail($data);





        Mail::to(Email::first())->send(new sendEmail($data));

        return back()->with('success', '!تم الارسال بنجاح');

    }
}
