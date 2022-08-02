<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $imFromController = 'HELLO VUE.JS I AM FROM LARAVEL :)';
        
        return view('test2',compact('imFromController'));
    }
}
