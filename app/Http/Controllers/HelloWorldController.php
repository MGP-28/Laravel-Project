<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        $helloWorld = "Hello Mr.";
        $pistolero = "Jonas Pistolas";
        return view('hello_world.index', [
            'helloWorld' => $helloWorld,
            'pistolero'  => $pistolero
            ]);
    }
}
