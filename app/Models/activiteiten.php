<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activiteiten extends Model
{
    use HasFactory;

    protected $table = 'activiteiten';
    protected $fillable = ['omschrijving', 'kortomschrijving', 'eigenaar', 'created_at', 'updated_at'];

    protected $primaryKey = 'activiteit';
}

// Met foreign key in de tabel
// protected $fillable = ['omschrijving', 'kortomschrijving', 'eigenaar', 'created_at', 'updated_at'];