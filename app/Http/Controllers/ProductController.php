<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Product; // importo el modelo 

use App\Http\Requests\CreateProductRequest; //importo la clase 
use App\Http\Requests\UpdateProductRequest; //importo la clase 

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
    public function create(){
        return view('products.create');
    }
    public function store(CreateProductRequest $request){
        //dd($request->all()); //con este veo lo que esta recibiendo 
       // return $request->get('name');
        $product = new Product;  
        $product->cod = $request->get('cod');
        $product->name = $request->get('name');
        $product->description = $request->get('type');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->save();
        return redirect()->route('listar');
  
    }

    public function find(){
        return view('products.find');

    }
    /*
    public function edit(Product $product){
        //$product = Product::find($id);
        dd($product);

        return view('products.edit')->with(['product'=>$product]);
    }*/
    public function edit($id){
        $product = Product::find($id);

        return view('products.edit')->with(['product'=>$product]);
    }
//public function update(Product $product, Request $request){
    public function update($id, UpdateProductRequest $request){
        //dd($request);

        $product = Product:: find($id);
        $product->update(

            $request->only('name','description', 'price')
        );
        //$id = $product->id;
      return redirect()->route('producto', ['cod' => $product->id]);

    }

    public function delete($id){
        $product= Product::find($id);

        $product->delete();

        return redirect()->route('listar');

    }
}
