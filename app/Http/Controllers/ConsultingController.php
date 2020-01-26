<?php

namespace App\Http\Controllers;

use App\Consulting;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function index()
    {
        $consultings = Consulting::all();
        return view('Consultings.index', ['consultings' => $consultings]);
    }

    public function show(Consulting $consulting)
    {
        return view('Consultings.show', ['consulting' => $consulting]);
    }

    public function create()
    {
        return view('Consultings.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $consulting = new Consulting($validated);
        $consulting->user_id = 1;
        $consulting->categoria = 1;
        $consulting->save();

        return redirect('/consultings');

    }

    public function edit(Consulting $consulting)
    {
        return view('Consultings.edit', ['consulting' => $consulting]);
    }

    public function delete(Consulting $consulting)
    {
        $consulting->delete();

        return redirect('/consultings');
    }

    public function update(Consulting $consulting)
    {
        $validated = request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $consulting ->update($validated);

        return redirect('/consultings');

    }
}
