<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.userpage');
    }

    public function mitra()
    {
        return view('auth.register-mitra');
    }

    public function goatvest()
    {
        return view('auth.register-goatvest');
    }

    public function article1()
    {
        return view('article.article-1');
    }

    public function article2()
    {
        return view('article.article-2');
    }

    public function article3()
    {
        return view('article.article-3');
    }

    public function about()
    {
        return view('home.about');
    }

    public function services()
    {
        return view('home.services');
    }

    public function faq()
    {
        return view('home.faq');
    }

    public function admin_login()
    {
        return view('home.admin_login');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='2')
        {
            return view('admin.home');
        }

        elseif ($usertype == '3') {
            return view('mitra.home');
        }

        else
        {
            return view('users.layout.dashboard');
        }
    }
}