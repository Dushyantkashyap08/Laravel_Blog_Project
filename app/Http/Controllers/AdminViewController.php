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

    public function viewForms()
    {
        return view('admin-panel.forms');
    }

    public function viewLogin()
    {
        return view('admin-panel.login');
    }

    public function viewRegister()
    {
        return view('admin-panel.register');
    }

    public function viewAddPostPage()
    {
        return view('admin-panel.add_post');
    }
}
