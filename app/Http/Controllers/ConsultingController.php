<?php

namespace App\Http\Controllers;

use App\Consulting;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $consulting->Auth::id();
        $consulting->category_id = 1;
        $consulting->save();

        return redirect()->route('consultings.index');
    }

    public function edit(Consulting $consulting)
    {
        return view('Consultings.edit', ['consulting' => $consulting]);
    }

    public function delete(Consulting $consulting)
    {
        $consulting->delete();

        return redirect()->route('consultings.index');
    }

    public function update(Consulting $consulting)
    {
        $validated = request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $consulting->update($validated);

        return redirect()->route('consultings.update');

    }
}
