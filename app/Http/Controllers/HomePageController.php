<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePage;

class HomePageController extends Controller
{
    //Slider Page Show Index
    public function SliderPageShow()
    {   
    	$data = HomePage::find(2);
    	return view('admin.settings.slider.index', compact('data'));
    }

    //Slider Page Store
    public function SliderPageStore(Request $request)
    {   
    	$old_img_name1 = $request -> slider_old_image1;
    	$old_img_name2 = $request -> slider_old_image2;
    	$old_img_name3 = $request -> slider_old_image3;
    	$old_img_name4 = $request -> slider_old_image4;
    	

    	//Slider Image Change1
    	if ( $request -> hasFile('slider_image1') ) {
    		$img = $request -> file('slider_image1');
    		$unique_img_name1 = md5(rand().time()) .'.'. $img -> getClientOriginalExtension();
    		$img -> move(public_path('media/slider/'), $unique_img_name1);
    		unlink('media/slider/' . $old_img_name1); 
    	}else{
            $unique_img_name1 = $old_img_name1;
    	}

    	//Slider Image Change2
    	if ( $request -> hasFile('slider_image2') ) {
    		$img = $request -> file('slider_image2');
    		$unique_img_name2 = md5(rand().time()) .'.'. $img -> getClientOriginalExtension();
    		$img -> move(public_path('media/slider/'), $unique_img_name2);
    		unlink('media/slider/' . $old_img_name2);
    	}else{
    		$unique_img_name2 = $old_img_name2;
    	}

    	//Slider Image Change3
    	if ( $request -> hasFile('slider_image3') ) {
    		$img = $request -> file('slider_image3');
    		$unique_img_name3 = md5(rand().time()) .'.'. $img -> getClientOriginalExtension();
    		$img -> move(public_path('media/slider/'), $unique_img_name3);
    		unlink('media/slider/' . $old_img_name3); 
    	}else{
    		$unique_img_name3 = $old_img_name3;
    	}

    	//Slider Image Change4
    	if ( $request -> hasFile('slider_image4') ) {
    		$img = $request -> file('slider_image4');
    		$unique_img_name4 = md5(rand().time()) .'.'. $img -> getClientOriginalExtension();
    		$img -> move(public_path('media/slider/'), $unique_img_name4);
    		unlink('media/slider/' . $old_img_name4); 
    	}else{
    		$unique_img_name4 = $old_img_name4;
    	}
        
        //slider array
    	$slider_array = [
          'slider_image1' => $unique_img_name1,
          'slider_image2' => $unique_img_name2,
          'slider_image3' => $unique_img_name3,
          'slider_image4' => $unique_img_name4,
    	];
        
        //json Encoder
    	$slider_json = json_encode($slider_array);

    	//Database Data Find
    	$data = HomePage::find(2);

    	//Database Data Update
    	$data -> slider = $slider_json; 
    	$data -> update();

    	//return with homepage
    	return redirect() -> route('sldier.add') -> with('success', 'Slider Updated Successful');
    }

    //CopyRight Section
    public function CopyPageShow()
    {
        return view('admin.settings.copyright.index');
    }

    //Patner Page Show
    public function PatnerPageShow()
    {
         return view('admin.settings.patner.index'); 
    }

    //Patner Update
    public function PatnerUpdate(Request $request)
    {
        return $request -> all();
    }
}
