<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogViewController extends Controller
{
    public function viewHomepage()
    {
        return view('blog.homepage');
    }

    public function viewContact()
    {
        return view('blog.contact');
    }

    public function viewBlogPosts()
    {
        $post = Post::all();
        return view('blog.blog_posts',compact('post'));
    }

    public function viewAbout()
    {
        return view('blog.about');
    }

    public function viewBlog()
    {
        return view('blog.blog');
    }
}
