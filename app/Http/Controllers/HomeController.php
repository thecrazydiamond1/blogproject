<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Notifications\LoginNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
class HomeController extends Controller
{
    public function index()
    {
       if(Auth::id()){
        $usertype = Auth::user()->usertype;
        $user=Auth::user();
        
        $posts=Post::all();
        if($usertype == 'admin'){
            return view('admin.adminhome');
        }else if($usertype == 'user'){
            return view('home.homepage', compact('posts'));
        }else{
            return redirect()->back();
        }
       }
    }
    public function homepage()
    {  
        if(Auth::id()){
            $usertype = Auth::user()->usertype;
            $user=Auth::user();
            
            $posts=Post::all();
            if($usertype == 'admin'){
                return view('admin.adminhome');
            }else if($usertype == 'user'){
                return view('home.homepage', compact('posts'));
            }else{
                return redirect()->back();
            }
           }
        $posts=Post::all();
        return view('home.homepage', compact('posts'));
    }
    public function show_details( $id){
        $posts=Post::find($id);
        return view ('home.show_details',compact('posts'));
       }
       public function post_page(){
        return view('home.post_page');
       }
    
    public function create_post(Request $request){
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
        
        return view ('home.show_post',compact('posts'));
       }

       public function edit($id){
        $posts=Post::find($id);
        return view('home.edit', compact('posts'));
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
        return redirect('/show_post_user')->with('success', 'Post updated successfully');
       }

       public function delete_post($id){
        $posts=Post::findOrFail($id);
        $posts->delete();
        return redirect('/show_post_user')->with("success","Deleted successfully!!!");
       }
}
