<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        table_products::insert([
            'name' => 'Iphone X',
            'description' => 'Ultimo movil lanzado por Apple'
        ]);
    }
}
