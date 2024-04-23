<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activiteiten extends Model
{
    use HasFactory;

    protected $table = 'activiteiten';
    protected $fillable = ['omschrijving', 'kortomschrijving', 'eigenaar', 'created_at', 'updated_at'];

    protected $primaryKey = 'activiteit';
    protected $keyType = 'string';


    public function reserveringen()
    {
        return $this->hasMany(Reserveringen::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}