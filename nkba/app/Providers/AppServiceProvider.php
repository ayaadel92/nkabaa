<?php

namespace App\Providers;

use Event;

use App\Transfer;

use App\Events\TransferEvent;

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
        //
        Transfer::created(function ($item) {
            Event::fire(new TransferEvent($item));
        });
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
