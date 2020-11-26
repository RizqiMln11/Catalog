<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Profile;
use App\Post;
use App\Auth;
use App\category;
use App\Setting;
use App\PostPrice;
use App\price;
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
        $full = category::orderBy('created_at', 'asc')->take(3)->get();
        // $catAll = category::orderBy('created_at', 'asc')->take(10)->get();
        $catAll = category::all();
        $pst = Post::orderBy('created_at', 'desc')->take(5)->get();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(10)->get();
        $pstEditorPick = Post::inRandomOrder()->take(2)->get();
        $pstPrice = new PostPrice;
        $prices = new price;
        $pstHomePage = Post::inRandomOrder()->take(8)->get();
        $pstSlider = new Post;
        return view('index2', compact('post', $post, 'limit', $limit, $full, 'full', $pst, 'pst', $sixthpost, 'sixthpost', 'catAll', $catAll, 'pstEditorPick', $pstEditorPick, 'pstPrice', $pstPrice, 'prices', $prices,'pstHomePage', $pstHomePage, 'pstSlider', $pstSlider))
                    ->with('profile', Profile::first())
                    ->with('setting', Setting::first())
                    ->with('title', Setting::first()->site_name)
                    ->with('categories', category::take(4)->get()
                    );
    }


    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $pstPrice = PostPrice::where('posts_id', $post->id)->first();
        try {
            $prices =  price::where('id', $pstPrice->prices_id)->first();
        } catch (\Throwable $th) {
            $prices = new \stdClass();;
            $prices->harga_diskon =  "-";
            $prices->harga_normal =  "-";
        }
        

        $profile = Profile::all();
        $postPluck = Post::where('id', '!=', $post->id)->take(5)->get();
        $catAll = category::orderBy('created_at', 'asc')->take(10)->get();
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        $newpstPrice = new PostPrice;
        $newprices = new price;
        // dd($prices);
        return view('single2', compact('postPluck', $postPluck, 'newpstPrice', $newpstPrice, 'newprices', $newprices,'catAll', $catAll, 'prices', $prices))
                    ->with('post', $post)
                    ->with('profile', Profile::first())
                    ->with('title', $post->title)
                    ->with('setting', Setting::first())
                    ->with('categories', category::take(4)->get())
                    ->with('next', Post::find($next_id))
                    ->with('prev', Post::find($prev_id))
                    ->with('tags', Tag::all()
                );
    }


    public function category($id)
    {
        $catAll = category::orderBy('created_at', 'asc')->take(10)->get();
        $category = category::find($id);
        $profile = Profile::all();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(5)->get();
        $newpstPrice = new PostPrice;
        $newprices = new price;

        return view('category2', compact($sixthpost, 'sixthpost', $newpstPrice, 'newpstPrice', $newprices, 'newprices', 'catAll', $catAll))->with('category', $category)
                               ->with('title', $category->name)
                                ->with('profile', Profile::first())
                               ->with('setting', Setting::first())
                               ->with('categories', category::take(4)->get());
    }


    public function tag($id)
    {
        $catAll = category::orderBy('created_at', 'asc')->take(10)->get();
        $tag = Tag::find($id);
        $newpstPrice = new PostPrice;
        $newprices = new price;
        $profile = Profile::all();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(5)->get();

             return view('tag2', compact($sixthpost, 'sixthpost', $newpstPrice, 'newpstPrice', $newprices, 'newprices', 'catAll', $catAll))->with('tag', $tag)
                               ->with('title', $tag->tag)
                               ->with('profile', Profile::first())
                               ->with('setting', Setting::first())
                               ->with('categories', category::take(4)->get());
    }


     public function setting()
    {
        $setting = Setting::all();
        $profile = Profile::all();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(5)->get();
        $catAll = category::orderBy('created_at', 'asc')->take(10)->get();
        $pst = Post::orderBy('created_at', 'desc')->take(5)->get();

             return view('contact2', compact($sixthpost, 'sixthpost',$catAll,'catAll',$pst, 'pst'))
                                    ->with('settings', Setting::first())
                                    ->with('setting', Setting::first())
                                   ->with('profile', Profile::first())
                                   ->with('categories', category::take(4)->get());
    }
    public function profile()
    {
        $profile = Profile::all();
        $sixthpost = Post::orderBy('created_at', 'desc')->take(5)->get();

               return view('about', compact($sixthpost, 'sixthpost'))->with('profile', Profile::first())
                                   ->with('categories', category::take(4)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        $setting = Setting::first();
        $catAll = category::orderBy('created_at', 'asc')->take(10)->get();
        $pstHomePage = Post::orderBy('created_at', 'desc')->take(4)->get();
        $pstPrice = new PostPrice;
        $prices = new price;
        $pstEditorPick = Post::inRandomOrder()->take(2)->get();
        return view('services2', compact('setting', $setting, 'catAll', $catAll, 'pstHomePage', $pstHomePage, 'pstPrice', $pstPrice, 'prices', $prices, 'pstEditorPick', $pstEditorPick));
    }

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
