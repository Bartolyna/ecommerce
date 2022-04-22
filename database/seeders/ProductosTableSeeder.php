<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre' => 'MacBook P',
            'precio' => 5249.999,
            'descripcion' => 'MackBook Pro 16',
            'image_path' => 'imagen1.jpg',
        ]);

        Producto::create([
            'nombre' => 'Tenis Converse',
            'precio' => 149.999,
            'descripcion' => 'Converse Naranjas',
            'image_path' => 'imagen2.jpg',
        ]);

        Producto::create([
            'nombre' => 'Tacones',
            'precio' => 249.999,
            'descripcion' => 'Tacones Rosados',
            'image_path' => 'imagen3.jpg',
        ]);

        Producto::create([
            'nombre' => 'Guayos de Ronaldo',
            'precio' => 459.999,
            'descripcion' => 'Los ultimos guayos que utilizo Ronaldo',
            'image_path' => 'imagen4.jpg',
        ]);
        Producto::create([
            'nombre' => 'Tenis New Balance JB',
            'precio' => 149.999,
            'descripcion' => 'Tenis New Balance JBalvin',
            'image_path' => 'imagen5.jpg',
        ]);

        Producto::create([
            'nombre' => 'Mac',
            'precio' => 849.999,
            'descripcion' => 'MackBooko',
            'image_path' => 'imagen6.jpg',
        ]);

        Producto::create([
            'nombre' => 'Tenis New Balance',
            'precio' => 99.999,
            'descripcion' => 'Tenis New Balance Gris',
            'image_path' => 'imagen7.jpg',
        ]);

        Producto::create([
            'nombre' => 'Vestido Gala',
            'precio' => 499.999,
            'descripcion' => 'Vestido de gala negro',
            'image_path' => 'imagen8.jpg',
        ]);

        Producto::create([
            'nombre' => 'Vestido',
            'precio' => 199.999,
            'descripcion' => 'Vestido colorido',
            'image_path' => 'imagen9.jpg',
        ]);

        Producto::create([
            'nombre' => 'Chanclas',
            'precio' => 79.999,
            'descripcion' => 'Chanclas para playa',
            'image_path' => 'imagen10.jpg',
        ]);

        Producto::create([
            'nombre' => 'Pantaloneta',
            'precio' => 249.999,
            'descripcion' => 'Pantaloneta de playa',
            'image_path' => 'imagen11.jpg',
        ]);

        Producto::create([
            'nombre' => 'Pantaloneta G',
            'precio' => 249.999,
            'descripcion' => 'Pantaloneta gris',
            'image_path' => 'imagen12.jpg',
        ]);

        Producto::create([
            'nombre' => 'Camisa Deportivo Cali B',
            'precio' => 249.999,
            'descripcion' => 'Camisa Deportico Cali Blanca',
            'image_path' => 'imagen13.jpg',
        ]);

        Producto::create([
            'nombre' => 'Camisa Deportivo Cali V',
            'precio' => 249.999,
            'descripcion' => 'Camisa Deportivo Cali Verde',
            'image_path' => 'imagen14.jpg',
        ]);

        Producto::create([
            'nombre' => 'Camisa del America',
            'precio' => 249.999,
            'descripcion' => 'Cmaisa Roja del America',
            'image_path' => 'imagen15.jpg',
        ]);


    }
}
