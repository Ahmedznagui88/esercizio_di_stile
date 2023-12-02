<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function home() {

        /* $periodics = Http::get('./chemical-elements.json')->json();
        @dd($periodics); */
        return view('welcome');
    }

    public function about() {
        return view('about');
    }
}
