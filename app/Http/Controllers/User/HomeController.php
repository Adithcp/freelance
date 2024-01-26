<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function aboutUs()
    {
        return view('user.aboutus');
    }

    public function getProperties()
    {
        return view('user.properties');
    }

    public function blog()
    {
        return view('user.blog');
    }

    public function joinWithUs()
    {
        return view('user.join-with-us');
    }

    public function contactUs()
    {
        return view('user.contactus');
    }

    public function terms()
    {
        return view('user.terms');
    }

    public function faq()
    {
        return view('user.faq');
    }
}
