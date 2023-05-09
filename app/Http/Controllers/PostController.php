<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $all_posts = Post::all();
        return view('post.index',['posts'=>$all_posts]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd(array_merge($request->all(),['user_id'=>$request->user()->id]));
       $post =Post::create(array_merge($request->all()));
       return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

           return view('post.edit',['post'=>Post::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request,$id)
    {

      $post =Post::find($id);
      $post->name = $request->name;
      $post->age= $request->age;
      $post->IDno = $request->IDno;
      if( $post->save())
         return redirect('posts');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Post::find($id)->delete();

        return redirect()->route('posts.index');

    }
}
