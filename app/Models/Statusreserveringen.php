<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statusreserveringen extends Model
{
    use HasFactory;

    protected $table = 'statusreserveringen';

    protected $fillable = ['omschrijving', 'created_at', 'updated_at'];

    protected $primaryKey = 'status';
    protected $keyType = 'string';

    public function reserveringen()
    {
        return $this->hasMany(Reserveringen::class);
    }
}
