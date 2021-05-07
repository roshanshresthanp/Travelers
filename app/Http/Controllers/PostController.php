<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{

    public function __construct(){

        $this->middleware('auth',['except'=>['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('pages.blogs',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
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
        'photo'=>'image|nullable|max:2000'
        ]);

            if($request->hasFile('photo')){
                $filenameFull = $request->file('photo')->getClientOriginalName();

                $filename = pathinfo($filenameFull,PATHINFO_FILENAME);

                $extension = $request->file('photo')->getClientOriginalExtension();

                $filenameToStore = $filename.'_'.time().'.'.$extension;
                // upload image
                $path = $request->file('photo')->storeAs('public/image/posts',$filenameToStore);

            } else {
                $filenameToStore = 'noimage.jpg';
            }
        
        // $user_id = Auth::user()->id;  //get auth id

        
            
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('body');
        $post->tags = $request->input('tags');
        $post->image = $filenameToStore;  
        $post->user_id = auth()->user()->id; 
        $post->save();

        return redirect('/posts/create')->with('success','Post added successfully !!');

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
        $post = Post::find($id);
        

      return view('post.edit',compact('post'));
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
        
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('body');
        $post->tags = $request->input('tags');
        // $post->image = $filenameToStore;  
        // $post->user_id = auth()->user()->id; 
        $post->save();

        return redirect('/post/show')->with('success','Post updated successfully !!');
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
        return redirect('/post/show')->with('error','Post deleted sucessfully !!'); 
    }

    
    public function showAll(){
        $users = User::all();
        $posts = Post::paginate(5);

        return view('post.show',compact('users','posts'));
    }
}
