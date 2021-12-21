<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //Membuat validasinya
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        //jika validasi gagal

        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }

        //Query membuat User

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->bcrypt($request->password)
        ]);


        // Jika berhasil menyimpan tampilkan respon JSON 

        if ($user) {
            # code...
            return response()->json([
                'success' => true,
                'user' => $user,
            ],201);
        }

        // Jika gagal menyimpan 

        return response()->json([
            'success'=> false,
        ],409);
    }
}
