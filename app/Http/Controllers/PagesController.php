<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getAbout(){
        return view('about');
    }
    public function getNewrequest(){
        return view('newrequest');
    }
    public function getDashboard(){
        return view('dashboard');
    }
    public function getWelcome(){
        return view('welcome');
    }
    public function getlogin(){
        return view('login');
    }
}
