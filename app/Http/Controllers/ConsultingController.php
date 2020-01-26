<?php

namespace App\Http\Controllers;

use App\Consulting;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function show()
    {
        $consultings = Consulting::all();
        return view('Consultings.show', ['consultings' => $consultings]);
    }

    public function create()
    {
        return view('Consultings.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
        ]);

        $consulting = new Consulting($validated);
        $consulting->user_id = 1;
        $consulting->categoria = 1;
        $consulting->save();

        return redirect('/consultings');

    }
}
