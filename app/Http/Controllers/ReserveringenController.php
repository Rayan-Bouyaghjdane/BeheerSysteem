<?php

namespace App\Http\Controllers;

use App\Models\Reserveringen;
use App\Models\Statusreserveringen;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ReserveringenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reserveringen = Reserveringen::orderBy("status", "desc")->get();
        $statusreserveringen = Statusreserveringen::all();

        return view('reserveringen.index', [
            'reserveringen' => $reserveringen, 'statusreserveringen' => $statusreserveringen
        ]);
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
    public function show(Reserveringen $reserveringen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserveringen $reserveringen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserveringen $reserveringen)
    {
        $request->validate([
            'status' => [
                'required',
                'exists:statusreserveringen,status'
            ]
        ]);

        if ($reserveringen->status === $request->status) {
            return redirect()->route('reserveringen.index');
        }

        $reserveringen->status = $request->status;
        $reserveringen->save();

        return redirect()->route('reserveringen.index')->with('success', 'U heeft de status succesvol veranderd.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserveringen $reserveringen)
    {
        //
    }
}
