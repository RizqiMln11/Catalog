<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Profile;
use App\Post;
use App\Auth;
use App\Category;
use App\Setting;

class ApiFrontController extends Controller
{
    public function showfirstpost(){
        $db = Post::orderBy('created_at', 'desc')->take(1)->with('category')->with('tags')->with('User')->get();

        return response()->json($db);
    }

    public function showpost(){
        $db = Post::OrderBy('created_at', 'desc')->with('category')->with('tags')->with('User')->get();

        return response()->json($db);
    }

    public function showdetailpost($id){
        $db = Post::where('id', $id)->with('category')->with('tags')->with('User')->get();

        return response()->json($db);
    }

    public function posttrash()
    {
        $pst = Post::onlyTrashed()->with('category')->with('tags')->with('User')->get();

        return response()->json($pst);
    }

    public function showcategorypost($id){
        $db = Post::where('category_id', $id)->with('category')->with('tags')->with('User')->get();

        return response()->json($db);
    }

    public function showcategory(){
        $db = Category::all();

        return response()->json($db);
    }

    public function showtag(){
        $db = Tag::with('posts')->get();

        return response()->json($db);
    }
    public function showdetailtag($id){
        $db = Tag::where('id', $id)->with('posts')->get();

        return response()->json($db);
    }
    public function showSet()
    {
        $sett = Setting::all();

        return response()->json($sett);
    }

    public function showProv()
    {
        $prof = Profile::with('user')->get();

        return response()->json($prof);
    }

    public function addPost(Request $request)
    {
         $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'uploads/posts/1567479339m1.jpg',
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title),
            'user_id' => $request->user_id,
        ]);
         
        $post->tags()->attach($request->tags);

        return response()->json('sukses boskuu');
    }
}
