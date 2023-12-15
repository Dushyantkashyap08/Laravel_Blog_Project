<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comments;
use App\Models\User;

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

    
    public function deleteComment($id){
        $post = Comments::find($id);
        $post->delete();

        return redirect()->back()->with('success', 'Comment successfully deleted.');
    }
    
    public function acceptPost($id){
        $data = Post::find($id);
        $data->post_status = 'active';
        $data->save();
        return redirect()->back()->with('success', 'Post is Accepted now');
    }

    public function rejectPost($id){
        $data = Post::find($id);
        $data->post_status = 'rejected';
        $data->save();
        return redirect()->back()->with('error', 'Post is Rejected now.');
    }

}
