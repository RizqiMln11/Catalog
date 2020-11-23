<?php

namespace App\Http\Controllers;

use Session;
use Alert;
use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = category::all();

        return view('admin.categories.index', compact('categories', $categories) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nama' => 'required|min:3',
        // ]);

        $gambar = $request->gambar;


        $featured_new_name = time() . $gambar->getClientOriginalName();
        $gambar->move('uploads/posts', $featured_new_name);

        $category = new Category;
        $category->name = $request->name; 
        $category->gambar = 'uploads/posts/' . $featured_new_name;
        $category->save();

        Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');

        return redirect()->route('categories'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::find($id);

        return view('admin.categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = category::find($id);

        

        $category->name = $request->name;

        if($request->gambar != null){
            $gambar = $request->gambar;
            $featured_new_name = time() . $gambar->getClientOriginalName();
            $gambar->move('uploads/posts', $featured_new_name);
            $category->gambar = 'uploads/posts/' . $featured_new_name;
        }else{
            $category->gambar = $category->gambar;
        }

        $category->save();

        Session::flash('success', 'You succesfully updated the category');

        return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);

        foreach ($category->posts as $post) {
            $post->ForceDelete();
        }

        $category->delete();

        Session::flash('success', 'You succesfully deleted the category');

        return redirect()->route('categories');
    }
}
