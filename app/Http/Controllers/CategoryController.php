<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(){
        return view('destination.index');
    }

    public function show(){
        $cats = Category::all();
        return view('category.show',compact('cats'));
    }

    public function store(Request $request){

        // if($request->hasFile('logo')){
        //     $filenameFull = $request->file('logo')->getClientOriginalName();
        //     $extension = $request->file('logo')->getClientOriginalExtension();

        //     $filename = pathinfo($filenameFull, PATHINFO_FILENAME);

        //     $filenameToStore = $filename.'_'.time().'.'.$extension;
        //         // upload image
        //         $path = $request->file('logo')->storeAs('public/img/logo',$filenameToStore);

        //     } else {
        //         $filenameToStore = 'noimage.jpg';
        //     }


        $Cat = new Category();
        $Cat->name = $request->input('name');
        $Cat->description = $request->input('description');
        // $rest->logo = $filenameToStore;
        $Cat->save();

        return redirect('/category/show')->with('success','Category added successfully !!');

    }
    public function delete($id){

        $cat = Category::find($id);
        $cat->delete();
        return redirect('category/show')->with('error','Category deleted successfully !!');

    }
    public function edit($id){
        $cat = Category::find($id);
        $cats = Category::all();
        return view('category.edit',compact('cat','cats'));

    }
    public function update(Request $request,$id){
        $Cat = Category::find($id);
        $Cat->name = $request->input('name');
        $Cat->description = $request->input('description');
        // $rest->logo = $filenameToStore;
        $Cat->save();

        return redirect('/category/show')->with('success','Category updated successfully !!');
    }
}
