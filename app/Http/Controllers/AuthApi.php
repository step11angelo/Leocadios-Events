<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connect;

class AuthApi extends Controller
{
    //
    public function store(Request $request)
    {
       $connect = new Connect;
       $connect->firstname = $request->input('firstname');
       $connect->lastname = $request->input('lastname');
       $connect->email = $request->input('email');
       $connect->phone = $request->input('phone');
       $connect->message = $request->input('message');
       $connect->save();

       return response()->json([
            'status'=> 200,
            'message'=>'Message sent Successfully'
       ]);
    }
}
