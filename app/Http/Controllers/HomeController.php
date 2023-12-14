<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function index(){

    //     if(Auth::id())
    //     {
    //         $data = User::where('usertype','=','user')->count();

    //         $post = Post:: all()->count();
    //         $comments = Comments::latest('comment')->limit(3)->get();


    //         $post_title = Post::where('');

    //         $usertype = auth()->user()->usertype;

    //         if($usertype == "user")
    //         {
    //             return redirect ('/');
    //         }
    //         elseif($usertype == "admin")
    //         {
    //             return view ('admin-panel.dashboard',compact('data','post','post_title','comments'));
    //         } 
    //         else
    //         {
    //             return redirect()->back();
    //         }
    //     }

    public function index(){
        if(Auth::id()) {

            // $query = Comments::query(); // replace YourModel with your actual model
            // $sql = $query->toSql();
            // dd($sql);
            // die();

            $data = User::where('usertype','=','user')->count();
            $postCount = Post::count();
            $comments = Comments::orderBy('id', 'desc')->limit(3)->get();

    
            // Fetching the latest 3 comments with their associated post titles
            $latestComments = Comments::orderBy('id', 'desc')->take(3)->get();

            $commentsWithPostTitles = [];
    
            foreach ($latestComments as $comment) {
                $postTitle = $comment->post->title;
                $commentsWithPostTitles[] = [
                    'comment' => $comment->comment,
                    'post_title' => $postTitle,
                ];
            }

  

    
            $usertype = auth()->user()->usertype;
    
            if($usertype == "user") {
                return redirect ('/');
            } elseif($usertype == "admin") {
                return view ('admin-panel.dashboard', compact('data', 'postCount', 'commentsWithPostTitles'));
            } else {
                return redirect()->back();
            }
        }
    }
    
    }    

   

