<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaspectosController extends Controller
{
    public function index() {
        return view('paspectos');
    }
}
