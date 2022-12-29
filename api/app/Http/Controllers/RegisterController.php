<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class RegisterController extends Controller
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

        if(count($cariUser) > 0) {
            return response()->json([
                'message' => 'exist'
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
}
