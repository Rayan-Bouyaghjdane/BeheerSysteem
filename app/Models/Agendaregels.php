<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendaregels extends Model
{
    use HasFactory;

    protected $table = 'agendaregels';
    protected $fillable = ['dagvandeweek', 'begintijd', 'eindtijd', 'website', 'created_at', 'updated_at'];

    protected $primaryKey = ['activiteit', 'datum', 'ruimte'];
    protected $keyType = 'array';
    public $incrementing = false;

    public function dagvandeweek()
    {
        return $this->belongsTo(Dagvandeweek::class);
    }

    public function ruimte()
    {
        return $this->belongsTo(Ruimte::class);
    }
}
