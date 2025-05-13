<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller // 确保类名是 StaticPagesController
{
    /**
     * 显示主页。
     */
    public function home()
    {
        // 视图文件路径是 'static_pages.home'
        return view('static_pages.home');
    }

    /**
     * 显示帮助页面。
     */
    public function help()
    {
        // 视图文件路径是 'static_pages.help'
        return view('static_pages.help');
    }

    /**
     * 显示关于页面。
     */
    public function about()
    {
        // 视图文件路径是 'static_pages.about'
        return view('static_pages.about');
    }

    // 如果还有其他静态页面的方法，也需要类似地修改 view() 中的路径
}
