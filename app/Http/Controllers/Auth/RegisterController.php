<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Register;

class RegisterController extends Controller
{



    public function showRegistrationForm(){

        return abort(404);
    }
}
