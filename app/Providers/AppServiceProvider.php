<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //文字列の最大文字数をお191文字に限定する設定
        \Schema::defaultStringLength(191);
        //アプリ内のリンクをhttpsで生成する設定
        \URL::forceSchema('https');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
