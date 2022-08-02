<?php

namespace App\Providers;

use App\Models\Grade;
use App\Models\School;
use Illuminate\Support\ServiceProvider;
use Spatie\PrefixedIds\PrefixedIds;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        PrefixedIds::registerModels([
            'user_' => User::class,
            'schl_' => School::class,
            'grd_' => Grade::class,
            //'class_' => Class::class,
            //'level' => Level::class
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
