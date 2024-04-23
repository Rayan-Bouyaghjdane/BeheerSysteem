<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datum extends Model
{
    use HasFactory;

    protected $table = 'datums';

    protected $fillable = ['dag', 'status', 'created_at', 'updated_at'];

    protected $primaryKey = 'datum';
    protected $keyType = 'string';

    public function reserveringen()
    {
        return $this->hasMany(Reserveringen::class);
    }
}
