<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application Flickr Gallery.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('index', ['categories' => $categories]);
    }
}
