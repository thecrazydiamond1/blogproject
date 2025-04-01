<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function post_page(){
    return view('admin.post_page');
   }
   public function add_post(Request $request){
    $user=Auth::user();
    $user_id=$user->id;
    $name=$user->name;
    $usertype=$user->usertype;

    $post= new Post();
    $post->title=$request->title;
    $post->description=$request->description;
    $post->user_id=$user_id;
    $post->name=$name;
    $post->usertype=$usertype;
    $post->post_status="active";

    $image=$request->image;
    if($image){
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('postimage', $imagename);
    $post->image=$imagename;
    }

    $post->save();
    return redirect()->back()->with('success', "Post added Successfully !!");
   }
   public function show_post(){
    $posts=Post::all();
    return view ('admin.show_posts',compact('posts'));
   }
   public function detail(string $id){
    $posts=Post::find($id);
    return view('admin.details', compact('posts'));
   }
   public function delete_post($id){
    $posts=Post::findOrFail($id);
    $posts->delete();
    return redirect('/show_post')->with("success","Deleted successfully!!!");
   }

   public function edit($id){
    $posts=Post::find($id);
    return view('admin.edit', compact('posts'));
   }
   public function update(Request $request, $id){
    $posts=Post::find($id);
    $posts->title=$request->title;
    $posts->description=$request->description;
    $posts->post_status=$request->post_status;

    $image=$request->image;
    if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage', $imagename);
        $posts->image=$imagename;
    }

    $posts->save();
    return redirect('/show_post')->with('success', 'Post updated successfully');
   }
}
