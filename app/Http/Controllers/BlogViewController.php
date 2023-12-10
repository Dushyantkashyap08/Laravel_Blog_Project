<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function viewServices()
    {
        return view('blog.services');
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
