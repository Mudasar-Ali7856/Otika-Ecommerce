<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Session;
use Auth;
use Hash;
use validate;
use DB;

class Categoriescontroller extends Controller
{
    public function create(Categories $categories){
        $categories= Categories::all();
        return view('pages.categories.index',compact('categories'));
    }

    public function index(){
        return view('pages.categories.form');
    }
    public function store(Request $request){
        $categories = new Categories();
        $categories->name=$request->name;
        $categories->order=$request->order;
        $categories->description=$request->description;
        $categories->save();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = time() . '.' . $file->extension();
            $file->move(public_path('images'),$image_name);
            $categories->image=$image_name;
            $categories->save();
        }
        return redirect()->back();
      }
    public function edit($id){
       $categories = Categories::find($id);
        return view('pages.categories.index',compact('categories'));
    }
    public function update($id){

       $categories = Products::find($id);
       $categories->name=$request->name;
       $categories->description=$request->description;
       $categories->order=$request->order;
       $categories->category=$request->category;
       $categories->update();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = time() . '.' . $file->extension();
            $file->move(public_path('images'),$image_name);
           $categories->image=$image_name;
           $categories->update();
        }
    }
    public function delete($id){
       $categories = Categories::find($id);
       $categories->delete();
        return redirect()->back();
    }
}
