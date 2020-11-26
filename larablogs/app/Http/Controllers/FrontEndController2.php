<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController2 extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        $s = Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first();


        return view('index2')
                    ->with('title', Setting::first()->site_name)
                    ->with('categories', category::take(4)->get())
                    ->with('first_post', Post::orderBy('created_at', 'desc')->first())
                    ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                    ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                    ->with('Ruby_on_trails', category::find(3))
                    ->with('saicklpo', category::find(4))
                    ->with('mobile_legends', category::find(1))
                    ->with('settings', Setting::first());
    }


    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
                    ->with('title', $post->title)
                    ->with('settings', Setting::first())
                    ->with('categories', category::take(4)->get())
                    ->with('next', Post::find($next_id))
                    ->with('prev', Post::find($prev_id))
                    ->with('tags', Tag::all());
    }


    public function category($id)
    {
        $category = category::find($id);

        return view('category')->with('category', $category)
                               ->with('title', $category->name)
                               ->with('settings', Setting::first())
                               ->with('categories', category::take(4)->get());
    }


    public function tag($id)
    {
        $tag = Tag::find($id);

             return view('tag')->with('tag', $tag)
                               ->with('title', $tag->tag)
                               ->with('settings', Setting::first())
                               ->with('categories', category::take(4)->get());
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
