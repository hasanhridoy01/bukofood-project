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
        $data = HomePage::find(2);
        return view('admin.settings.copyright.index', compact('data'));
    }

    //CopyRight Update
    public function CopyUpdate(Request $request)
    {
        //form validation
        $this -> validate($request, [
            'copyright' => 'required',
        ]);

        //data update with database
        $data = HomePage::find(2);
        $data -> copyright = $request -> copyright;
        $data -> update();

        //return with homepage
        return redirect() -> route('copy.index') -> with('success', 'Slider Updated Successful');
    }

    //Patner Page Show
    public function PatnerPageShow()
    {    
         $data = HomePage::find(2);
         return view('admin.settings.patner.index', compact('data')); 
    }

    //Patner Update
    public function PatnerUpdate(Request $request)
    {
        //img unique name1
        if ( $request -> hasFile('new-logo1') ) {
            $img = $request -> file('new-logo1');
            $unique_img_name1 = md5(rand().time()) .'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('media/patner/'), $unique_img_name1);
        }

        //img unique name2
        if ( $request -> hasFile('new-logo2') ) {
            $img2 = $request -> file('new-logo2');
            $unique_img_name2 = md5(rand().time()) .'.'. $img2 -> getClientOriginalExtension();
            $img2 -> move(public_path('media/patner/'), $unique_img_name2);
        }

        //img unique name3
        if ( $request -> hasFile('new-logo3') ) {
            $img3 = $request -> file('new-logo3');
            $unique_img_name3 = md5(rand().time()) .'.'. $img3 -> getClientOriginalExtension();
            $img3 -> move(public_path('media/patner/'), $unique_img_name3);
        }

        //img unique name4
        if ( $request -> hasFile('new-logo4') ) {
            $img4 = $request -> file('new-logo4');
            $unique_img_name4 = md5(rand().time()) .'.'. $img4 -> getClientOriginalExtension();
            $img4 -> move(public_path('media/patner/'), $unique_img_name4);
        }

        //patner value array convert
        $patner_array = [
            'patner_image1' => $unique_img_name1,
            'patner_image2' => $unique_img_name2,
            'patner_image3' => $unique_img_name3,
            'patner_image4' => $unique_img_name4,
        ];
        
        //patner json data
        $patner_json = json_encode($patner_array);

        //find data
        $data = HomePage::find(2);
        $data -> patner = $patner_json;
        $data -> update();

        //return with homepage
        return redirect() -> route('patner.add') -> with('success', 'Slider Updated Successful');
    }

    //Member Page show
    public function MemberPageShow()
    {   
        $data = HomePage::find(2);
        return view('admin.settings.member.index', compact('data'));
    }

    //member Update
    public function MemberUpdate(Request $request)
    {
        //form validation
        $this -> validate($request, [
            'name' => 'required',
            'content' => 'required',
        ]);

        $old_photo = $request -> old_photo;

        //file Upload
        if ( $request -> hasFile('new-photo') ) {
            $img = $request -> file('new-photo');
            $unique_img_name = md5(rand().time()) .'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('media/member/'), $unique_img_name);
            unlink('media/member/' . $old_photo);
        }else{
            $unique_img_name = $old_photo;
        }

        //Data Send With database
        $member_array = [
            'name' => $request -> name,
            'content' => $request -> content,
            'job' => $request -> job,
            'member_image' => $unique_img_name,
        ];

        $member_json = json_encode($member_array);

        //find data with database
        $data = HomePage::find(2);
        $data -> member = $member_json;
        $data -> update();

        //return with homepage
        return redirect() -> route('member.add') -> with('success', 'Slider Updated Successful');
    }

    //Social Page Show
    public function SocialPageShow()
    {   
        $data = HomePage::find(2);
        return view('admin.settings.social.index', compact('data'));
    }

    //social update
    public function SocialUpdate(Request $request)
    {
        //form validation
        $this -> validate($request, [
             'facebook'   => 'required',
             'instragram' => 'required',
             'tiwtter'    => 'required',
             'google'     => 'required',
             'pinterest'  => 'required',
        ]);

        //form data array convert
        $social_array = [
             'facebook' => $request -> facebook,
             'instragram' => $request -> instragram,
             'tiwtter' => $request -> tiwtter,
             'google' => $request -> google,
             'pinterest' => $request -> pinterest,
        ];

        //social data json convert
        $social_json = json_encode($social_array);

        //find data with database
        $data = HomePage::find(2);
        $data -> social = $social_json;
        $data -> update();

        //return with homepage
        return redirect() -> route('social.add') -> with('success', 'Slider Updated Successful');
    }
}
