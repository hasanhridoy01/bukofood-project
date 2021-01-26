<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $all_cat = Category::latest() -> get();
        return view('admin.category.index', compact('all_cat'));
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
        //form validation
        $this -> validate($request, [
              'name' => 'required',
        ]);
        
        //databasre data send
        Category::create([
            'name' => $request -> name,
            'slug' => Str::slug($request -> name),
        ]);

        //return with home page
        return redirect() -> route('category-add.index') -> with('success', 'Category Added Successful');
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
        $cat = Category::find($id);

        //data return
        return [
          'name' => $cat -> name,
          'id' => $cat -> id,
          'slug' => $cat -> slug,
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
       //find id
       $id = $request -> id;

       //get all value
       $data = Category::find($id);

       //data update
       $data -> name = $request -> name;
       $data -> slug = Str::slug($request -> name);
       $data -> update();

       //return with home page
       return redirect() -> route('category-add.index') -> with('success', 'Category Updated Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        //category delete
        $data = Category::find($id);
        $data -> delete();

        //return with home page
        return redirect() -> route('category-add.index') -> with('success', 'Category Deleted Successful');
    }
}
