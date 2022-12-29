<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $nama       = $request->nama;
        $jk         = $request->jk;
        $tglLahir   = $request->tglLahir;
        $freshgrad  = $request->freshGrad;
        $username   = $request->username;
        $password   = $request->password;

        $cariUser = UserModel::where('nama', $nama)->get();
        $cariUsername = UserModel::where('username', $username)->get();

        if(count($cariUser) > 0) {
            return response()->json([
                'message' => 'user exist'
            ]);
        }

        if(count($cariUsername) > 0) {
            return response()->json([
                'message' => 'username exist'
            ]);
        }

        $create = UserModel::create([
            'nama' => $nama,
            'jenis_kelamin' => $jk,
            'tgl_lahir' => $tglLahir,
            'fresh_graduated' => $freshgrad,
            'username' => $username,
            'password' => $password
        ]);

        if($create) {
            return response()->json([
                'message' => 'registered'
            ]);
        }
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $cekUser = UserModel::where('username', $username)->get();
        if(count($cekUser) == 0) {
            return response()->json([
                'message' => 'user not fund'
            ]);
        }

        $cekPassword = $cekUser->pluck('password')->first();
        if($cekPassword == $password) {
            return response()->json([
                'message' => 'logged in'
            ]);
        } else {
            return response()->json([
                'message' => 'wrong password'
            ]);
        }
    }
}
