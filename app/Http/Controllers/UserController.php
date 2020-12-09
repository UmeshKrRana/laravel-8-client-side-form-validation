<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return view("register");
    }

    // register user
    public function registerUser(Request $request) {
        $userArray  =   array( 
            "first_name"    =>      $request->firstName,
            "last_name"     =>      $request->lastName,
            "email"         =>      $request->email,
            "phone"         =>      $request->phone,
            "password"      =>      $request->password,
            "gender"        =>      $request->gender,
            "dob"           =>      $request->dateOfBirth,
            "address"       =>      $request->address,
            "city"          =>      $request->city,
            "state"         =>      $request->state,
            "zipcode"       =>      $request->zipcode,
        );

        $user       =       User::create($userArray);
        if(!is_null($user)) { 
            return back()->with("success", "Registration completed successfully");
        }

        else {
            return back()->with("failed", "Registration failed. Try again.");
        }
    }
}
