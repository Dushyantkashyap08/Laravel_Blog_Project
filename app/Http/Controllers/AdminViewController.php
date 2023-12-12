<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminViewController extends Controller
{
    public function viewDashboard()
    {
        return view('admin-panel.dashboard');
    }

    public function viewCharts()
    {
        return view('admin-panel.charts');
    }

    public function showPostPage()
    {
        $post = Post::paginate(2);
        return view('admin-panel.show_post', compact('post'));
    }

    public function viewLogin()
    {
        return view('admin-panel.login');
    }

    public function viewRegister()
    {
        return view('admin-panel.register');
    }

    public function addPostPage()
    {
        return view('admin-panel.add_post');
    }
}
