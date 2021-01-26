<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $all_tag = Tag::latest() -> get();
        return view('admin.tag.index', compact('all_tag'));
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
        
        //data send with database
        Tag::create([
           'name' => $request -> name,
           'slug' => Str::slug($request -> name),
        ]);

        //return with home page
        return redirect() -> route('tag-add.index') -> with('success', 'Tag Added Successful');
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
        $all_tag = Tag::find($id);
        return [
           'name' => $all_tag -> name,
           'id' => $all_tag -> id,
           'slug' => $all_tag -> slug,
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

        $data = Tag::find($id);
        $data -> name = $request -> name;
        $data -> slug = Str::slug($request -> name);
        $data -> update();

        //return with home page
        return redirect() -> route('tag-add.index') -> with('success', 'Tag Updated Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tag::find($id);
        $data -> delete();

        //return with home page
        return redirect() -> route('tag-add.index') -> with('success', 'Tag Deleted Successful');
    }
}
