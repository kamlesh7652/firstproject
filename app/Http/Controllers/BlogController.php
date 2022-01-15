<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $getdata=Blog::all();
      $com=Comment::get();
      return view('index',compact('getdata','com'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog=new Blog;
        $blog->title=$request->title;
        $blog->description=$request->description;
        if($request->hasfile('profile'))
      {
        $file=$request->file('profile');
        $extention=$file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('storage',$filename);
        $blog->profile=$filename;
      }
      $blog->save();
     return redirect('demo');
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
        $getdata=Blog::find($id);
        return view('edit',compact('getdata'));
       //dd($edt);
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
        $update=Blog::find($id);
        $update->title=$request->title;
        $update->description=$request->description;
        if($request->hasfile('profile'))
        {
          $file=$request->file('profile');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $file->move('storage',$filename);
          $update->profile=$filename;
        }
        $update->save();
       return redirect('demo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dd=Blog::find($id);
        $dd->delete();
        return redirect('demo');
    }
    public function comment($id)
    {     $hh=$id;

        return view('comment',compact('hh'));
    }
    public function cstore(Request $req)
    {
      $comment= new Comment;
      $comment->name=$req->name;
      $comment->comment=$req->comment;
      $comment->blog_id=$req->blog_id;
      $comment->save();
      return redirect('demo');
    }
    function api()
    {
        $blogApi=Blog::with(['Comment'])->first();
        return $blogApi;
    }
}
