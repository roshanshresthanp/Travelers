<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Destination;

class DestinationController extends Controller
{

            public function __construct(){

                $this->middleware('auth',['except'=>['destinationDetail','display','filterResult']]);
            }



    public function destinationDetail($id){
        $dest = Destination::find($id);
        return view('pages.destination_detail',compacts('dest'));
    }
    public function create(){

         $cats = Category::all();
        return view('destination.create',compact('cats'));

    }
    public function store(Request $request)
    {
           $this->validate($request,
            [
                'name'=>'required',
                'image'=>'image|nullable|max:2000'

            ]);

        if($request->hasFile('image')){
            $filenameFull = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($filenameFull,PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('image')->storeAs('public/image/destinations',$filenameToStore);

        } else {
            $filenameToStore = 'noimage.jpg';
        }
            
            $dest = new Destination();
            $dest->name =$request->input('name');
            $dest->price =$request->input('price');
            $dest->duration =$request->input('duration');
            $dest->inclusion =$request->input('inclusion');
            $dest->exclusion =$request->input('exclusion');
            $dest->image = $filenameToStore;
            $dest->itinerary =$request->input('itinerary');
            $dest->description =$request->input('description');
            $dest->category_id = $request->input('cat_name');
            $dest->save();
            
             return redirect('/destination/add')->with('success','Destination added successfully');

    }
    public function show()
    {
        $dests = Destination::paginate(8);
        $cat = Category::all();

        return view('destination.show',compact('dests','cat'));

    }
    public function edit($id)
    {
        $dest = Destination::find($id);
        $cats = Category::all();
        return view('destination.edit',compact('dest','cats'));
    }

    public function update(Request $request, $id){
        $this->validate($request,
        [
            'name'=>'required|max:255',
            'image'=>'image|nullable|max:2000'

            
        ]);
        
        $dest = Destination::find($id);
        $dest->name =$request->input('name');
        $dest->price =$request->input('price');
        $dest->duration =$request->input('duration');
        $dest->inclusion =$request->input('inclusion');
        $dest->exclusion =$request->input('exclusion');
        $dest->itinerary =$request->input('itinerary');
        $dest->description =$request->input('description');
        // $dest->image = $filenameToStore;
        $dest->category_id =$request->input('cat_name');
        $dest->save();
// print_r($dest);

        
        return redirect('/destination/show')->with('success','Destination updated successfully !!');
      
    }
    public function delete($id){
        $dest = Destination::find($id);
        $dest->delete();
        return redirect('/destination/show')->with('error','Destination deleted successfully !!');
    }

   

    public function display($id){
        $cats = Category::all();
        $destination = Destination::find($id);
        // $posts = Post::where('title','Post One')->get();
        // $postss = DB::select('SELECT * FROM posts');
        // $posts = DB::table('posts')->get();

        // $dest = Destination::where('name',$name)->get();
        return view('pages.destination_detail',compact('destination','cats'));
    }

    
}
