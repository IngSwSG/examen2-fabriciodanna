<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Material extends Model
{
   use HasFactory;
    protected $table = 'material';

    protected $fillable = ['codigo', 'unidadMedida', 'descripcion', 'ubicacion', 'idCategoria'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria');
    }

    public function materialUnidad()
    {
        return $this->hasMany(MaterialUnidad::class, 'idMaterial');
    }

}
