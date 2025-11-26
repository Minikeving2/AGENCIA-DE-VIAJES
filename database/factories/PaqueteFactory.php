<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Paquete;

class PaqueteFactory extends Factory
{
    protected $model = Paquete::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'destino' => $this->faker->city(),
            'duracion' => $this->faker->numberBetween(3, 14),
            'precio' => $this->faker->numberBetween(500000, 5000000),
            'descripcion' => $this->faker->paragraph(),
            'itinerario' => $this->faker->paragraph(2),
            'imagenes' => [], // puedes llenar luego si lo deseas
            'activo' => true,
        ];
    }
}