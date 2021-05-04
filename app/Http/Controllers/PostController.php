<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.blogs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
        'title'=>'required',
        'body'=> 'required',
        'cover_image'=>'image|nullable|max:2000'
        ]);

            if($request->hasFile('cover_image')){
                $filenameFull = $request->file('cover_image')->getClientOriginalName();

                $filename = pathinfo($filenameFull,PATHINFO_FILENAME);

                $extension = $request->file('cover_image')->getClientOriginalExtension();

                $filenameToStore = $filename.'_'.time().'.'.$extension;
                // upload image
                $path = $request->file('cover_image')->storeAs('public/cover_image',$filenameToStore);

            } else {
                $filenameToStore = 'noimage.jpg';
            }
        
        // $user_id = Auth::user()->id;  //get auth id
        
            
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->cover_image = $filenameToStore;  
        $post->user_id = auth()->user()->id; //
        $post->save();

        return redirect('/dashboard')->with('success','Post Created');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return response()->json($post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id)->delete();

      return response()->json(['success'=>'Post Deleted successfully']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}
