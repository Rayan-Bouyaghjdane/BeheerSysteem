<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserveringen extends Model
{
    use HasFactory;

    protected $table = 'reserveringen';

    protected $fillable = ['activiteit', 'datum', 'status', 'dagvandeweek', 'aantallaptops', 'created_at', 'updated_at'];


    public function activiteiten()
    {
        return $this->belongsTo(Activiteiten::class);
    }

    public function datum()
    {
        return $this->belongsTo(Datum::class);
    }

    public function statusreserveringen()
    {
        return $this->belongsTo(Statusreserveringen::class);
    }
}
