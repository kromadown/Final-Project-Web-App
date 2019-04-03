<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Jelajah';
        return view('pages.cover', compact('title'));
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about2', compact('title'));
    }

    public function features(){
        $title = 'Features';
        return view('pages.features', compact('title'));
    }

    public function profile(){
        $title = 'Profile';
        return view('pages.profile3', compact('title'));
    }

    public function checkout(){
        $title = 'Checkout';
        return view('pages.checkout2', compact('title'));
    }

    public function interactive(){
        $title = 'Interacive';
        return view('pages.interactive', compact('title'));
    }

    public function java(){
        $title = 'java';
        return view('pages.java', compact('title'));
    }

    public function centraljava(){
        $title = 'centraljava';
        return view('pages.centraljava', compact('title'));
    }

    public function yogyakarta(){
        $title = 'yogyakarta';
        return view('pages.yogyakarta', compact('title'));
    }
    
    
}
