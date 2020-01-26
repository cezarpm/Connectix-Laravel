<?php

namespace App\Http\Controllers;

use App\Consulting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $consultings = Consulting::all()->take(3);
        return view('index', ['consultings' => $consultings]);
    }
}
