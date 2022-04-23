<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Product; // importo el modelo 
use App\Models\Category; // importo el modelo 

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
      // dd($products);
        //return view('products.list')->with(['products' => $products]); //le paso todo a la vista con width ;
        return view('products.list', compact('products'));
        //return view('layout.list');
    }
    
    public function show($id){   
        //dd($product);
        $product = Product::find($id);
        if ($product==null)
        {
            return view('layout._exc');
        } else {
        return view('products.product')->with(['product' => $product]);
        }
    }

    public function result(Request $request){
        //dd($request);
        $product = Product::where('name', 'like', '%'.$request->name.'%')->get();
        //$product=Product::where('name',$request->name)->first();
       //dd($product->id);
        
      //  return view('products.product')->with(['product' => $product]); //esta la retorno cuando tenia first
        return view('products.list')->with(['products' => $product]); //esta la retorno con la lista de productos
    }

    public function create(){
        $categorias = Category::all();
//        dd($categorias);
        return view('products.create')->with(['categories' => $categorias]);
    }

    public function store(CreateProductRequest $request){
        //dd($request->all()); //con este veo lo que esta recibiendo 
       // return $request->get('name');
       $validated = $request->validate([
           'cod' => '',
           'name' => 'size:5',
           'price' => 'numeric',
           'quantity' => 'integer',
           'category' => 'integer'
        
       ]

       );
        $product = new Product;  
        $product->cod = $request->get('cod');
        $product->name = $request->get('name');
        $product->description = $request->get('type');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->category_id = $request->get('category');
        $product->save();
        session()->flash('message','Product created');
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
        //dd($product);
        if ($product==null)
        {
            return view('layout._exc');
        } else {
            return view('products.edit')->with(['product'=>$product]);
        }
    }
//public function update(Product $product, Request $request){
    public function update($id, UpdateProductRequest $request){
        //dd($request);

        $product = Product:: find($id);
        $product->update(

            $request->only('name','description', 'price', 'quantity')
        );
        //$id = $product->id;
        session()->flash('message','Product edited');
      return redirect()->route('producto', ['cod' => $product->id]);

    }

    public function delete($id){
        $product= Product::find($id);

        $product->delete();

        session()->flash('message','Product deleted');

        return redirect()->route('listar');

    }
}
