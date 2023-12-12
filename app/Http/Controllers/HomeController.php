<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id())
        {
            $data['totalUsers'] = Post::where('usertype','=','user')->count();
            $post = Post:: where('post_status','=','active')->get();
            $usertype = Auth()->user()->usertype;

            if($usertype == "user")
            {
                return redirect ('/',compact('post'));
            }
            else if($usertype == "admin")
            {
                return view ('admin-panel.dashboard',compact('data'));
            } 
            else
            {
                return redirect()->back();
            }
        }
    }    

   
}
