<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Material;
use App\Models\Categoria;

class MaterialControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function dadoUnMaterialQueNoExiste_insertarMaterial_funcionaCorrectamente()
{
   
    $categoria = \App\Models\Categoria::factory()->create();

    
    $data = [
        'codigo' => 12,
        'unidadMedida' => 'Med',
        'descripcion' => 'prueba',
        'ubicacion' => 'Almacén',
        'idCategoria' => $categoria->idCategoria, 
    ];

   
    $response = $this->post(route('material.store'), $data);

   
    $response->assertSessionHasNoErrors();

   
    $response->assertStatus(302);

   
    $this->assertDatabaseHas('material', $data);
}

}
