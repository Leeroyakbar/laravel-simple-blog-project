<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index() {
        return '<h1>Hello, World</h1>';
    }
}
