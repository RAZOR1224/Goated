<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function goatcha()
    {
        return view('users.layout.goatcha');
    }

    public function goatdrop()
    {
        return view('users.layout.goatdrop');
    }

    public function mitra()
    {
        $mitratype=Auth::user()->mitratype;

        if($usertype=='1')
        {
            return view('users.layout.mitra');
        }

        else
        {
            return view('auth.register-mitra');
        }
    }

    public function goatvest()
    {
        $goatvesttype=Auth::user()->goatvesttype;

        if($usertype=='1')
        {
            return view('users.layout.goatvest');
        }

        else
        {
            return view('auth.register-goatvest');
        }
    }

    public function riwayat()
    {
        return view('users.layout.riwayat');
    }

}
