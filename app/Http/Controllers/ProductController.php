<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth');

    }

    public function index()
    {
        

   return Product::where('user_id', auth()->id())->get();
       }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->description = $request->description;
        $product->nombre = "Oscar";
        $product->precio = 23;
        $product->imagen = 12;
        $product->user_id =auth()->id();
        $product->save();
        

        return $product;
     }

     public function categ(){


        return Category::all();
     }
        public function show($id)
    {
        
   
        return Product::where("products.category","=",$id)->get();
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->description = $request->description;
        $product->save();
        
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

    }
}
