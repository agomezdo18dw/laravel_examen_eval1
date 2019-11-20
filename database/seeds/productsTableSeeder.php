<?php

use Illuminate\Database\Seeder;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        products::insert([
            'name' => 'Iphone 11',
            'description' => 'Ultimo movil lanzado por Apple',
            'stock' => '5',
            'price' => '1099,99'
        ]);
        products::insert([
            'name' => 'OnePlus 7T',
            'description' => 'Ultimo movil lanzado por OnePlus',
            'stock' => '6',
            'price' => '699,99'
        ]);
        products::insert([
            'name' => 'Intel Core i7 8600k',
            'description' => 'Uno de los mejores procesadores de intel',
            'stock' => '1',
            'price' => '999,99'
        ]);
        products::insert([
            'name' => 'AMD Raden 5 700',
            'description' => 'Procesador AMD',
            'stock' => '5',
            'price' => '500,99'
        ]);
        products::insert([
            'name' => 'AMD Thidripper',
            'description' => 'Unos de los mejores procesadores de AMD',
            'stock' => '10',
            'price' => '1499,99'
        ]);
        products::insert([
            'name' => 'Bolso',
            'description' => 'Bolso de Bimba y Lola',
            'stock' => '20',
            'price' => '19,99'
        ]);
        products::insert([
            'name' => 'Camiseta',
            'description' => 'Camiseta del Pull & Bear',
            'stock' => '8',
            'price' => '14,99'
        ]);
        products::insert([
            'name' => 'Monitor acer',
            'description' => 'Monitor acer 19 pulgadas',
            'stock' => '4',
            'price' => '99,99'
        ]);
        products::insert([
            'name' => 'Raton acer',
            'description' => 'Raton para ordenador',
            'stock' => '3',
            'price' => '20,99'
        ]);
        products::insert([
            'name' => 'Teclado lenovo',
            'description' => 'Teclado de la marca lenovo',
            'stock' => '8',
            'price' => '30'
        ]);
    }
}
