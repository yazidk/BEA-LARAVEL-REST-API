<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    
    // Function register 
    public function register (Request $request) {
        $validator =  Validator::make($request->all() , [
            'name' => 'required|max:191' ,
            'email'  => 'required|email|max:191|unique:users,email',
            'password'  => 'required|min:8',

        ]);

        if($validator->fails()){
            return response()->json([
                'validation_errors' => $validator->messages(),
            ]);
        }
        else {
            $user = User::create([
                'name' => $request->name, 
                'email' => $request->email,
                'password'=> Hash::make($request->password)
                
            ]);
            $token = $user->createToken($request->email.'_Token'); 
        
        return response()->json([
            'status'=> 200 ,
            'user' => $user ,
            'token' => $token ,
            'message' => 'Register Successufully'

        ]);
        }
    }
}
