<?php

namespace App\Http\Controllers;

use App\Models\Activiteiten;
use Illuminate\Http\Request;

class ActiviteitenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activiteiten = Activiteiten::all();
        return view('activiteiten.index', ['activiteiten' => $activiteiten]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Activiteiten $activiteiten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activiteiten $activiteiten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activiteiten $activiteiten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activiteiten $activiteiten)
    {
        //
    }
}
