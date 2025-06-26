<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
   
    use HasFactory;
 protected $table = 'categorias'; // Opcional si el nombre es correcto por convención
    protected $primaryKey = 'idCategoria'; // ← NECESARIO
    protected $fillable = ['nombre'];

    public function materiales()
    {
        return $this->hasMany(Material::class, 'idCategoria');
    }
}
