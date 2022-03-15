<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){

        return view('layout.inicio');

    }

    public function listar(){
       return view('products.list');
        //return view('layout.list');
    }

    public function show(){

        return view('products.product');
    }
}
