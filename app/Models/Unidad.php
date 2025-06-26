<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Unidad extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function materialUnidad()
    {
        return $this->hasMany(MaterialUnidad::class, 'idUnidad');
    }

    public function presupuestos()
    {
        return $this->hasMany(Presupuesto::class, 'idUnidad');
    }
}
