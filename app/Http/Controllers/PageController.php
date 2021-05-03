<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Destination;

class PageController extends Controller
{
    public function index(){
        $dests = Destination::all();
        $cats = Category::all();
        return view('pages.index',compact('dests','cats'));

    }
    public function about(){
        return view('pages.about');
        
    }
    public function destination(){
        $cats = Category::paginate(6); 
        $dests = Destination::paginate(6);
        // $dests->withPath('/admin/users');

        // $dests->appends(['sort' => 'votes']);
        

        return view('pages.destination',compact('dests','cats'));
                // $posts = Post::orderBy('updated_at','desc')->simplePaginate(2);

    }
    public function contact(){
        return view('pages.contact');
    }
    

}
