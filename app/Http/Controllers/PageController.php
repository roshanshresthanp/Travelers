<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Destination;

class PageController extends Controller
{
    public function index(){
        $cats = Category::all();
        $dests = Destination::paginate(6);
        // $country = Category::orderBy('updated_at','desc')->simplePaginate(3);
        // $place = $cat->destinations;
        return view('pages.index',compact('dests','cats'));

    }
    public function about(){
        return view('pages.about');
        
    }
    public function destination(){
        $cats = Category::all(); 
        $dests = Destination::paginate(6);
        

        // $dests->appends(['sort' => 'price']);
        

        return view('pages.destination',compact('dests','cats'));
                // $posts = Post::orderBy('updated_at','desc')->simplePaginate(2);

    }
    public function contact(){
        return view('pages.contact');
    }

    public function countryPlace($id)
    {
        // $dest = Destination::find($id);
        $cat = Category::find($id);
        $dests = $cat->destinations;
        return view('pages.country_place',compact('dests','cat'));
        // return $dests;
    }
    

}
