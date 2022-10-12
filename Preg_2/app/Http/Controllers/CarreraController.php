<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function informatica(){
        return view('carreras.inf');
    }
}
