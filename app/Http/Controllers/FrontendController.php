<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\HomePage;

class FrontendController extends Controller
{   
	//home page show
    public function HomePageShow()
    {   
    	$products = Product::latest() -> get();
        $sliders = HomePage::find(2);
    	return view('frontend.index', compact('products','sliders'));
    }
    
    //about page show
    public function AboutPageShow()
    {
    	return view('frontend.about');
    }

    //shop page show
    public function ShopPageShow()
    {   
        $products = Product::latest() -> get();
    	return view('frontend.shop', compact('products'));
    }

    //contect page show
    public function ContectPageShow()
    {
    	return view('frontend.contect');
    }

    //faq page show
    public function FaqPageShow()
    {
    	return view('frontend.faq');
    }

    //how page show
    public function HowPageShow()
    {
    	return view('frontend.how');
    }
}
