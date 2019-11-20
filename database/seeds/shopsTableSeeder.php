<?php

use Illuminate\Database\Seeder;

class shopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        shops::insert([
            'name' => 'MediaMarkt',
            'description' => 'Tienda de electronica',
            'password' => 'M3d14M4rkt',
            'email' => 'mediamarkt@gmail.com',
            'likes' => '700'
        ]);
        shops::insert([
            'name' => 'Game',
            'description' => 'Tienda de videojuegos',
            'password' => 'g4m3',
            'email' => 'game@gmail.com',
            'likes' => '1000'
        ]);
        shops::insert([
            'name' => 'PcComponentes',
            'description' => 'Tienda de Componentes de PC',
            'password' => 'PCComAdmin',
            'email' => 'pccomponentes@gmail.com',
            'likes' => '2000'
        ]);
    }
}
