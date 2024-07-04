<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $dati = config("data");
        return view('pages.home', $dati);
    }

    public function about() {
        return view('pages.about');
    }
}
