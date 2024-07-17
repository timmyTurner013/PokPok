<?php

namespace App\Http\Controllers;

use App\Models\PokPok;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PokPokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('pokpoks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->pokpoks()->create($validated);

        return redirect(route('pokpoks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(PokPok $pokPok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PokPok $pokPok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PokPok $pokPok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PokPok $pokPok)
    {
        //
    }
}
