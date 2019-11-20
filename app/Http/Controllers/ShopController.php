<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tienda;

class ShopController extends Controller
{
    public function show(){
        $tiendas = Tienda::all();
        return view('tiendas/show')->with(['tiendas'=>$tiendas]);
    }
}
