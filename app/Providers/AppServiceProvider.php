<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
     '*',     //模板名
 
     'App\Http\Controllers\UserController@userindex'    //方法名或者类中的方法
 );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
=======
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
    {
        //
    }
}
