<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruimte extends Model
{
    use HasFactory;

    protected $table = 'ruimtes';

    protected $fillable = ['omschrijving', 'created_at', 'updated_at'];

    protected $primaryKey = 'lokaal';
    protected $keyType = 'string';

    public function agendaregels()
    {
        return $this->hasMany(Agendaregels::class);
    }
}
