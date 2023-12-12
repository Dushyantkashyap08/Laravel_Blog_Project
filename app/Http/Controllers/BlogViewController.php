<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogViewController extends Controller
{
    public function viewHomepage()
    {
        $post = Post::where('post_status','=','active')->get();
        return view('blog.homepage',compact('post'));
    }

    public function viewContact()
    {
        return view('blog.contact');
    }

    public function viewAbout()
    {
        return view('blog.about');
    }

}
