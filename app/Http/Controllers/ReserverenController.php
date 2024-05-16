<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Agendaregels;
use App\Models\Activiteiten;
use App\Models\Reserveringen;
use Illuminate\Http\Request;

class ReserverenController extends Controller
{
    public function index()
    {
         $owner = 'yasmina@jasmin.nl';
         $activiteiten = Activiteiten::where('eigenaar', $owner)->get();

         foreach ($activiteiten as $ac) {
          $agendaregels = Agendaregels::where('activiteit', $ac->activiteit)->first();
          $ac->dagvandeweek = $agendaregels->dagvandeweek;
          $ac->begintijd = $agendaregels->begintijd;
          $ac->eindtijd = $agendaregels->eindtijd;
         }


      return view('reserveren.index', ['activiteiten' => $activiteiten]);
    }

    public function store(Request $request)
    {
      $request->validate([
        'activiteit' => 'required',
        'datum' => 'required|date',
        'aantallaptops' => 'required|integer|min:1|max:20',
      ]);

      Reserveringen::create([
        'activiteit' => $request->activiteit,
        'dagvandeweek' => $request->dagvandeweek,
        'begintijd' => $request->begintijd,
        'eindtijd' => $request->eindtijd,
        'datum' => $request->datum,
        'aantallaptops' => $request->aantallaptops,
      ]);

      return redirect()->route('reserveren.index')->with('success', 'De reservering is succesvol aangemaakt!');
    }

    public function reservering()
    {
      $reserveringen = Reserveringen::all();
      return view('reserveren.reservering', ['reserveringen' => $reserveringen]);
    }

}
