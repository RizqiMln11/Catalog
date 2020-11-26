<?php

namespace App\Http\Controllers;


use Auth;
use App\Tag;
use Session;
use App\Post;
use App\category;
use App\price;
use App\PostPrice;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts', $posts) );
    }

    public function storePrice(Request $request)
    {
        // dd($request->tags);

        $this->validate($request, [
            'post_id'      => 'required',
            'harga_normal' => 'required',
            'harga_diskon' => 'required',

        ]);

        $post = price::create([
            'harga_normal' => $request->harga_normal,
            'harga_diskon' => $request->harga_diskon,
        ]);
        
        $lastsPostPrice = price::orderBy('id', 'desc')->first();
        PostPrice::create([
            'posts_id' => $request->post_id,
            'prices_id' => $lastsPostPrice->id
        ]);
        
        if($post){
            Session::flash('succes', 'Price Creates Succesfully');
        }

        return redirect()->route('price.list');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        $tags = Tag::all();

        if ($categories->count() == 0 || $tags->count() == 0);
        {
            Session::flash('info', 'You must have some categores and tags before atammting to create a post.');
        }


        return view('admin.posts.create')->with('categories', $categories)
                                         ->with('tags', $tags);
    }

    public function createprice()
    {
        $postPrices = PostPrice::all();
        $postPricesExits = [];
        foreach ($postPrices as $key) {
            $postPricesExits[] = $key->posts_id;
        }
        $posts = Post::whereNotIn('id', $postPricesExits)->get();
        return view('admin.posts.createprice', compact('posts', $posts, 'postPrices', $postPrices));
    }
    
    public function listprice()
    {
        // $prices = price::all();
        $prices = new price;
        $postPrices = new PostPrice;
        $posts = new Post;
        return view('admin.posts.pricelist', compact('prices', $prices,'postPrices', $postPrices, 'posts', $posts));
    }

    public function editprice($id)
    {
        $prices = price::find($id);
        $postPrice = PostPrice::where('prices_id', $id)->first();
        $postDetail = Post::where('id', $postPrice->posts_id)->first();
        return view('admin.posts.editprice', compact('postDetail', $postDetail))->with('prices', $prices);
    }

    public function updateprice(Request $request, $id)
    {
        $price = price::find($id);

        $price->harga_normal = $request->harga_normal;
        $price->harga_diskon = $request->harga_diskon;

        $price->save();

        Session::flash('success', 'Price Update!');

        return redirect()->route('price.list');

    }
    public function destroyprice($id)
    {
        $price = price::find($id);
        $postPrice = PostPrice::where('prices_id', $id)->first();
        $postPrice->delete();
        $price->delete();

        Session::flash('success', 'Berhasil di hapus');

        return redirect()->back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->tags);

        $this->validate($request, [
            'title' => 'required',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required',

        ]);

        $featured = $request->featured;


        $featured_new_name = time() . $featured->getClientOriginalName();
        $featured->move('uploads/posts', $featured_new_name);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'uploads/posts/' . $featured_new_name,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title),
            'user_id' => Auth::id()
        ]);

        $post->tags()->attach($request->tags);

        Session::flash('succes', 'Post Creates Succesfully');

        return redirect()->route('posts');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);


        return view('admin.posts.edit')->with('post', $post)
                                       ->with('categories', category::all())
                                       ->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required' 
        ]);

        $post = Post::find($id);

        if($request->hasFile('featured'))
        {

            $featured = $request->featured;

            $featured_new_name = time() . $featured->getClientOriginalName();

            $featured->move('uploads/posts', $featured_new_name);

            $post->featured = 'uploads/posts/'.$featured_new_name;

        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;

        $post->save();


        $post->tags()->sync($request->tags);

        Session::flash('success', 'Post Updated Succesfully');

        return redirect()->route('posts');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'Berhasil di hapus');

        return redirect()->back();
    }

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();

        return view('admin.posts.trashed')->with('posts', $posts);
    }

    public function kill($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        

        $post->forceDelete();

        Session::flash('success', 'You deleted permanently');

        return redirect()->back();
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        Session::flash('success','You restored successfully');

        return redirect()->route('posts');
    }
}
