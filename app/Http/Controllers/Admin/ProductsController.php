<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Session;
use Auth;
use Hash;
use validate;
use DB;

class Productscontroller extends Controller
{
    public function create(){
        $products = Products::all();
       return view('pages.products.index',compact('products'));
    }

    public function index(){
       return view('pages.products.form');
    }

    public function store(Request $request,Products $products){

        $products = new Products();
        $products->name=$request->name;
        $products->description=$request->description;
        $products->order=$request->order;
        $products->category=$request->category;
        $products->save();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = time() . '.' . $file->extension();
            $file->move(public_path('images'),$image_name);
            $products->image=$image_name;
            $products->save();
        }
        return redirect()->back();
    }
    public function edit($id){
        $products = Products::find($id);
        return view('pages.products.indexx',compact('products'));
    }
    public function update($id){

        $products = Products::find($id);
        $products->name=$request->name;
        $products->description=$request->description;
        $products->order=$request->order;
        $products->category=$request->category;
        $products->update();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = time() . '.' . $file->extension();
            $file->move(public_path('images'),$image_name);
            $products->image=$image_name;
            $products->update();
        }
    }
    public function delete($id){
        $products = Products::find($id);
        $products->delete();
        return redirect()->back();
    }
}
