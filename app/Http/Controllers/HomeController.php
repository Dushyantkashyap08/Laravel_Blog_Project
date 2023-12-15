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
        if(Auth::id()) {

            $data = User::where('usertype','=','user')->count();
            $postCount = Post::count();
            $comments = Comments::select('comment','post_id')->orderBy('id', 'desc')->take(3)->get();

            $usertype = auth()->user()->usertype;
    
            if($usertype == "user") {
                return redirect ('/');
            } elseif($usertype == "admin") {
                $userPostsData = User::withCount('posts')->get()->pluck('posts_count');
                return view ('admin-panel.dashboard', compact('data', 'postCount', 'comments','userPostsData'));
            } else {
                return redirect()->back();
            }
        }
    }
    
    }    

   

