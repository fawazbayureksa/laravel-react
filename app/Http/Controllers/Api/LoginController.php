<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Set Validation

        $validator=Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);
        
        //Jika Validasi gagal

        if ($validator->fails()) {
             # code...
            return response()->json($validator->errors(),422);
         } 

        // Mendapatkan credensial dari request 

        $credentials = $request->only('email','password');


        // jika auth gagal

        if (!$token = JWTAuth::attempt($credentials)) {
            # code...
            return response()->json([
                'success' => false,
                'message' => 'Email atau password salah'
            ]);
        }

        // Jika auth berhasil

        return response()->json([
            'success' => true,
            'user' => auth()->user(),
            'token' => $token
        ],200);
    }
}
