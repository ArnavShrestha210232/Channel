<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.main');
    }
    public function service()
    {
        return view('user.components.services');
    }
    public function aboutus()
    {
        return view('user.components.aboutus');
    }
    public function blog()
    {
        return view('user.components.blog');
    }
    public function contactus()
    {
        return view('user.components.contact');
    }
    public function gallery()
    {
        return view('user.components.gallery');
    }
    public function language()
    {
        return view('user.components.language');
    }
    public function abroad()
    {
        return view('user.components.abroad');
    }
    public function message()
    {
        return view('user.components.message');
    }
}
