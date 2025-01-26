<?php

namespace App\Http\Controllers;

use Illuminate\Http\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
}