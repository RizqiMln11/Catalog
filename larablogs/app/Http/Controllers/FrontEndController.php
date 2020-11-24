<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Profile;
use App\Post;
use App\Auth;
use App\Category;
use App\Setting;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        $s = Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first();
        $post = Post::all();
        $setting = Setting::all();
        $limit = Post::orderBy('created_at', 'desc')->first();
        $full = Category::orderBy('created_at', 'asc')->take(3)->get();
        $catAll = Category::orderBy('created_at', 'asc')->take(10)->get();
        $pst = Post::orderBy('created_at', 'desc')->take(5)->get();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(10)->get();
        $pstEditorPick = Post::inRandomOrder()->take(2)->get();
        return view('index2', compact('post', $post, 'limit', $limit, $full, 'full', $pst, 'pst', $sixthpost, 'sixthpost', 'catAll', $catAll, 'pstEditorPick', $pstEditorPick))
                    ->with('profile', Profile::first())
                    ->with('setting', Setting::first())
                    ->with('title', Setting::first()->site_name)
                    ->with('categories', Category::take(4)->get()
                    );
    }


    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

         $profile = Profile::all();
         $sixthpost = Post::orderBy('created_at', 'desc')->take(5)->get();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single', compact($sixthpost, 'sixthpost'))->with('post', $post)
                    ->with('profile', Profile::first())
                    ->with('title', $post->title)
                    ->with('settings', Setting::first())
                    ->with('categories', Category::take(4)->get())
                    ->with('next', Post::find($next_id))
                    ->with('prev', Post::find($prev_id))
                    ->with('tags', Tag::all());
    }


    public function category($id)
    {
        $category = Category::find($id);
        $profile = Profile::all();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(5)->get();

        return view('category', compact($sixthpost, 'sixthpost'))->with('category', $category)
                               ->with('title', $category->name)
                                ->with('profile', Profile::first())
                               ->with('settings', Setting::first())
                               ->with('categories', Category::take(4)->get());
    }


    public function tag($id)
    {
        $tag = Tag::find($id);
        $profile = Profile::all();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(5)->get();

             return view('tag', compact($sixthpost, 'sixthpost'))->with('tag', $tag)
                               ->with('title', $tag->tag)
                               ->with('profile', Profile::first())
                               ->with('settings', Setting::first())
                               ->with('categories', Category::take(4)->get());
    }


     public function setting()
    {
        $setting = Setting::all();
        $profile = Profile::all();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(5)->get();
        $catAll = Category::orderBy('created_at', 'asc')->take(10)->get();
        $pst = Post::orderBy('created_at', 'desc')->take(5)->get();

             return view('contact2', compact($sixthpost, 'sixthpost',$catAll,'catAll',$pst, 'pst'))
                                    ->with('settings', Setting::first())
                                    ->with('setting', Setting::first())
                                   ->with('profile', Profile::first())
                                   ->with('categories', Category::take(4)->get());
    }
    public function profile()
    {
        $profile = Profile::all();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(5)->get();

               return view('about', compact($sixthpost, 'sixthpost'))->with('profile', Profile::first())
                                   ->with('categories', Category::take(4)->get());
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
