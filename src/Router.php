<?php

namespace Goodwong\WechatMenu;

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
        Route::namespace('Goodwong\WechatMenu\Http\Controllers')->group(function () {
            Route::resource('wechat-menus', 'WechatMenuController');
        });
    }
}
