<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        Form::component('bsText', 'component.form.text', ['name', 'value', 'attributes']);
        //Form::component('bsText','component.form.text',['name','value'=>null,'attributes'=>[]]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
