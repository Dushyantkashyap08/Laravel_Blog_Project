<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id())
        {
            $data = User::where('usertype','=','user')->count();

            $post = Post:: all()->count();
            $comments = Comments::latest('comment')->limit(3)->get();


            $post_title = Post::where('');

            $usertype = auth()->user()->usertype;

            if($usertype == "user")
            {
                return redirect ('/');
            }
            elseif($usertype == "admin")
            {
                return view ('admin-panel.dashboard',compact('data','post','post_title','comments'));
            } 
            else
            {
                return redirect()->back();
            }
        }
    }    

   
}
