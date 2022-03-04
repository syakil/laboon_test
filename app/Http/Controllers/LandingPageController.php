<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('landingPage.index');
    }

    public function about(){
        return view('landingPage.about');
    }

    public function service(){
        return view('landingPage.services');
    }

    public function testimoni(){
        return view('landingPage.testimonials');
    }

    public function contact(){
        return view('landingPage.contactus');
    }

    public function blog(){
        return view('landingPage.blog');
    }
}
