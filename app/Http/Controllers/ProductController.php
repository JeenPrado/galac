<?php

namespace App\Http\Controllers;
 

use App\Product; // importo el modelo 

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){

        return view('layout.inicio');

    }

    public function listar(){

        $products = Product::all(); //Traigo toda la data a la vista 
       return view('products.list')->with(['products' => $products]); //le paso todo a la vista con width ;
        //return view('layout.list');
    }

    public function show($id){
          
        //dd($product);
        $product = Product::find($id);

        return view('products.product')->with(['product' => $product]);
        
    }
    public function register(){
        return view('products.register');
    }

    public function find(){
        return view('products.find');
    }
    public function edit(){
        return view('products.modify');
    }
}
