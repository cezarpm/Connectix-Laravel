<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function show(){
        return view('Consultings.show');
    }

    public function create(){
        return view('Consultings.create');
    }
}
