<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $user = new User([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);
        if($user->save()){
            $user->signin = [
                'href' => 'api/v1/signin',
                'method' => 'POST',
                'params' => 'email, password'
            ];
            $response = [
                'message' => 'User has been created',
                'user' => $user
            ];
            return response()->json($response, 201);
        }
        $response = [
            'message' => 'An Error Occured'
        ];
        return response()->json($response,404);
    }

    public function signin(Request $request){
        
    }
}
