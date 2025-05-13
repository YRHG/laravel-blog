<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * 显示网站的主页。
     *
     * @return View
     */
    public function index()
    {
        //  'home' 改为 'static_pages.home'
        return view('static_pages.home');
    }
}
