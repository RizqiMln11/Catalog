<?php

namespace App\Http\Controllers;

use App\Post;
use Alert;
use App\category;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');        
        return view('admin.dashboard')
                ->with('posts_count', Post::all()->count())
                ->with('trashed_count', Post::onlyTrashed()->get()->count())
                ->with('users_count', User::all()->count())
                ->with('categories_count', category::all()->count());
    }
}
