<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Social;
use App\About;
use App\Contact;
use App\adminlogo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $social=Social::get();
        view()->share('data',$social);

        $about=About::get();
        view()->share('data1',$about);

        $contact=Contact::get();
        view()->share('data2',$contact);

        $logo=adminlogo::get();
        view()->share('data3',$logo);

    }
}
