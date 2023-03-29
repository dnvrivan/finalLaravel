<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProductsController extends Controller
{
    public function index()
    {
        $data = DB::table("products")->get();
        return view('products.index',['products'=>$data]);
    } 

    public function addProducts()
    {
        return view('products.add');
    } 
    public function saveProducts(Request $req)
    {
        //dd($req);
        $validated=$req->validate([
            "description"=>['required','min:4'],
            "quantity"=>['required','min:2',],
            "price"=>['required','min:2'],
          
        ]);

            $data=Products::create($validated);
            return redirect("/products")->with('success', 'Product added successfully.');

    } 

   
    public function delete($id){
        $delete=DB::table("products")
        ->where("prodId", "=", $id)
        ->delete();

        return redirect('/products')
        ->with("success", "Product deleted successfully!");

    }
    public function edit($id){
        $data=Products::findOrFail($id);
        return view('products.edit',['products'=>$data]);


    }
    public function updateProducts(Request $req){
        $req->validate([
            "description"=>['required','min:4'],
            "quantity"=>['required','min:2'],
            "price"=>['required','min:2',],
    
        ]);

            $data=Products::find($req->id);
            $data->description=$req->description;
            $data->quantity=$req->quantity;
            $data->price=$req->price;
          
            $data->save();
            return redirect("/products")->with('success', 'Products edited successfully.');

        
    }
}
