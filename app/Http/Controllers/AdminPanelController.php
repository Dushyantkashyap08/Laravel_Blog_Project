<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use Alert;
// use App\Models\User;

class AdminPanelController extends Controller
{
    public function addPost( Request $request)
    {
        $user = Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;
        //retriving values from user table


        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;

        $post->post_status = 'active'; //by default we are keeping it acitve, everytime admin uploads an image

        //adding values form user table to post table
        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;

        $image = $request->image;

        if($image) //if there exists any image only then uplaod it 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
    
            $request->image->move('UploadedImages', $imagename);
    
            $post->image = $imagename;
        }


        if($post->save()){

            return redirect()->back()->with('success', 'Post successfully added.');
        }

    }

    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post successfully deleted.');
    }

    public function postDetails($id){
        $post = Post::find($id);
        return view('blog.post_details',compact('post'));
    }

    public function userPost(){
        return view('blog.user_post');
    }

    public function myPosts(){
        $user = Auth::user();
    
        $userid = $user->id;
        $data = Post::where('user_id','=',$userid)->get();
        return view('blog.my_posts', compact('data'));
    }

    public function userCreatePost(Request $request){

        $user = Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;
        //retriving values from user table


        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;

        $post->post_status = 'pending';

        $image = $request->image;

        if($image) //if there exists any image only then uplaod it 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
    
            $request->image->move('UploadedImages', $imagename);
    
            $post->image = $imagename;
        }

        if($post->save()){

            Alert::success('Congrats','You have added the data successfully');

            return redirect()->back()->with('success', 'Post successfully added.');
        }
    }
}
