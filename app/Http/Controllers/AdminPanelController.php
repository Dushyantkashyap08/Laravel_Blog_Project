<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
// use App\Models\User;

class AdminPanelController extends Controller
{
    public function add_post( Request $request)
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
        // else{
        //     return redirect()->back()->with('error', 'Post has NOT been uploaded.');
        // }

    }
}
