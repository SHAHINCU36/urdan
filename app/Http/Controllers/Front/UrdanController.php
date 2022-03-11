<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class UrdanController extends Controller
{
    public function index ()
    {
        return view('front.home.home', [
            'categories' => Category::all(),
        ]);
    }

    public function categoryPage ()
    {
        return view('front.category.category',[
            'categories' => Category::all(),
        ]);
    }
    public function productDetails ()
    {
        return view('front.product.product-details',[
            'categories' => Category::all(),
        ]);
    }
}
