<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function errorPage(){

        throw new Error("This is error");

        return view("welcome");
    }
}
