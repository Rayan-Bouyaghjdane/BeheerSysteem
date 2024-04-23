<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dagvandeweek extends Model
{
    use HasFactory;

    protected $table = 'dagvandeweek';

    protected $fillable = ['created_at', 'updated_at'];

    protected $primaryKey = 'dagvandeweek';
    protected $keyType = 'string';

    public function agendaregels()
    {
        return $this->hasMany(Agendaregels::class);
    }
}
