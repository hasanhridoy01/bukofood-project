<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cats = Category::latest() -> get();
        $tags = Tag::latest() -> get();
        $products = Product::latest() -> get();
        return view('admin.product.index', compact('cats','tags','products'));
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
        //form valivdation
        $this -> validate($request, [
              'name' => 'required',
              'price' => 'required',
        ]);

        //file upload section
        if ( $request -> hasFile('pimg') ) {
            $img = $request -> file('pimg');
            $img_unique_name = md5(rand().time()) .'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('media/product/'), $img_unique_name);
        }

        //data send with database
        $data = Product::create([
            'name' => $request -> name,
            'slug' => Str::slug($request -> name),
            'price' => $request -> price,
            'product_image' => $img_unique_name,
        ]);

         //category add
        $data -> tags() -> attach($request -> tags);

        //category add
        $data -> categoris() -> attach($request -> categoris);

        //return with home page
        return redirect() -> route('product-add.index') -> with('success', 'Product Added Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $cats = Category::latest() -> get();
        $tags = Tag::latest() -> get();

        $all_tag = $data -> tags;

        $checked_id = [];
        foreach ( $all_tag as $tag ) {
            array_push($checked_id, $tag -> id);
        }
        
        $tag_list = '';
        foreach ( $tags as $tag ) {
            if ( in_array($tag -> id, $checked_id) ) {
                $checked = 'checked';
            }else{
                $checked = '';
            }
            $tag_list .= '<input type="checkbox" '.$checked.' id="tg" value="'.$tag -> id.'" name="tags[]"><label for="tg"> '.$tag -> name.' </label><br>';
        }

        $categoris = $data -> categoris;

        $checked_id = [];
        foreach ( $categoris as $all_cat ) {
            array_push($checked_id, $all_cat -> id);
        }

        
        $cat_list = '';
        foreach ( $cats as $cat ) {
            if ( in_array($cat -> id, $checked_id) ) {
                $checked = 'checked';
            }else{
                $checked = '';
            }
            $cat_list .= '<input type="checkbox" '.$checked.' id="cn" value="'.$cat -> id.'" name="categoris[]"><label for="cn"> '.$cat -> name.' </label><br>';
        }

        return [
           'name' => $data -> name,
           'id' => $data -> id,
           'slug' => $data -> slug,
           'price' => $data -> price,
           'product_image' => $data -> product_image,
           'cat_list' => $cat_list,
           'tag_list' => $tag_list,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request -> id;
        $old_photo = $request -> old_photo;

        //photo upload
        if ( $request -> hasFile('upimg') ) {
            $img = $request -> file('upimg');
            $img_unique = md5(rand().time()) .'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('media/product/'), $img_unique);
            unlink('media/product/' . $old_photo);
        }else{
            $img_unique = $old_photo;
        }

        $data = Product::find($id);

        //category Remove
        $data -> categoris() -> detach();

        //category Update
        $data -> categoris() -> attach($request -> categoris);

        //tag Remove
        $data -> tags() -> detach();

        //tag update
        $data -> tags() -> attach($request -> tags); 

        //update data 
        $data -> name = $request -> name;
        $data -> slug = Str::slug($request -> name);
        $data -> price = $request -> price;
        $data -> product_image = $img_unique;
        $data -> update();

        //return with home page
        return redirect() -> route('product-add.index') -> with('success', 'Product Updated Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data -> delete();

        //return with home page
        return redirect() -> route('product-add.index') -> with('success', 'Product Added Successful');
    }
}
