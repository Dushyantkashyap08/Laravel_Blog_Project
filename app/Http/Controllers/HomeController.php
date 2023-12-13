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
            $data = User::where('usertype','=','user')->count();

            $post = Post:: all()->count();
            $usertype = Auth()->user()->usertype;

            if($usertype == "user")
            {
                return redirect ('/');
            }
            else if($usertype == "admin")
            {
                return view ('admin-panel.dashboard',compact('data','post'));
            } 
            else
            {
                return redirect()->back();
            }
        }
    }    

   
}
