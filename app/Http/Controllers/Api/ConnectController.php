<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Connect;
use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->all());
       $connect = new Connect();
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

    protected $routeMiddleware = [
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
      ];
}
