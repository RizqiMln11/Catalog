<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Auth;
use App\category;
use App\Setting;
use App\Profile;

class ApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.auth', [ 'except' => ['login'] ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return TAGS
     */
    public function index()
    {
        //
    }

    public function tags(Request $request){

        $tag = Tag::create([
            'tag' => $request->tag
          ]);

        return response()->json($tag);
    }

    public function showtags(){

        $tag = Tag::all();

        return response()->json($tag);
    }

    public function updatetags(Request $request){

        $id = $request->id;
        $tag = Tag::find($id);

        $tag->tag = $request->tag;

        $tag->save();

        return response()->json("berhasil di update");
    }

    public function deletetags(Request $request)
    {
        $id = $request->id;
        $tag = Tag::find($id);

        $tag->delete();

        return response()->json("berhasil di delete");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return POST
     */
    public function post()
    {

        $pst = Post::with('category')->get();

        return response()->json($pst);
    }

    public function trashed(Request $request)
    {
        $id = $request->id;
        $post = Post::find($id);

        $post->delete();

        return response()->json("berhasil di trash");
    }

    public function posttrash()
    {
        $pst = Post::onlyTrashed()->with('category')->with('tags')->with('User')->get();

        return response()->json($pst);
    }
    public function restore(Request $request)
    {
        $id = $request->id;
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        return response()->json("berhasil di restore");
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        
        $post = Post::withTrashed()->where('id', $id)->first();
        
        $post->forceDelete();

        return response()->json("berhasil di hapus");
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  Category
     */
    public function showcategory()
    {
        $category = category::all();

        return response()->json($category);
    }
    
    public function deletecategory(Request $request)
    {
        $id = $request->id;
        $ctg = category::find($id);

        $ctg->delete();

        return response()->json("berhasil di delete");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSet()
    {
        $sett = Setting::all();

        return response()->json($sett);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addPost(Request $request)
    {
         $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'uploads/posts/1567479339m1.jpg',
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title),
            'user_id' => 1,
        ]);

        $post->tags()->attach($request->tags);

        return response()->json('sukses bosku..');
    }

    public function upPost(Request $request)
    {
        $id = $request->id;

        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;

        $post->save();

        $post->tags()->sync($request->tags);

        return response()->json('sukses bosku..');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addCtg(Request $request)
    {
        $category = new Category;
        $category->name = $request->name; 
        $category->gambar = 'uploads/posts/1567479339m1.jpg';
        $category->save();

        return response()->json('sukses bosku..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upCatg(Request $request)
    {
      $id = $request->id;
        $cat = category::find($id);

        $cat->name = $request->name;

        $cat->save();

        return response()->json("berhasil di update");
    }

    public function Settings(Request $request)
    {
       $settings = Setting::first();

        $settings->site_name = request()->site_name;
        $settings->contact_number = request()->contact_number;
        $settings->contact_email = request()->contact_email;
        $settings->address = request()->address;

        $settings->save();

        return response()->json("berhasil di update");
    }

    public function upProf(Request $request)
    {
        $profile = Profile::find(1);

        $profile->facebook = $request->facebook;

        $profile->youtube = $request->youtube;

        $profile->about = $request->about;

        $profile->vision = $request->vision;

        $profile->mission = $request->mission;
        
        $profile->save();

        return response()->json("berhasil di update");
    }
}
