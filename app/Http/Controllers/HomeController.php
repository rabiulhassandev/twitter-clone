<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tweets = Tweet::take(3)->latest()->get();
        return view('home', compact('tweets'));
    }
}
