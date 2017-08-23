<?php

namespace Goodwong\LaravelWechatMenu;

use Illuminate\Support\Facades\Route;

class Router
{
    /**
     * routes
     * 
     * @return void
     */
    public static function menu()
    {
        Route::namespace('Goodwong\LaravelWechatMenu\Http\Controllers')->group(function () {
            Route::resource('wechat-menus', 'WechatMenuController');
        });
    }
}