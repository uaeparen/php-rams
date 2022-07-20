<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
////        $tags = Tag::orderBy('id', 'DESC')->paginate(6);
////        return view('catalog', compact('tags'));
//
//        $tags = Tag::paginate(6);
//        return view('layouts.sidebar', compact('tags'));
//    }


    public function index()
    {
        $tags = Tag::with('posts')->get();
        return view('detail')->withTags($tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $tags = Tag::get()->pluck('name', 'id');
        return view('layouts.sidebar', compact('tags'));
    }



//    // All Categories
//    function all_category(){
//        $tags=Tag::orderBy('id','desc')->paginate(5);
//        return view('detail',['tags'=>$tags]);
//    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
