<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpController extends Controller
{
    public function index() {
        return view('perp');
    }
}
