<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function viewHomepage()
    {
        return view('admin-panel.adminhome');
    }

    public function viewCharts()
    {
        return view('admin-panel.charts');
    }

    public function showPostPage()
    {
        return view('admin-panel.show_post');
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
