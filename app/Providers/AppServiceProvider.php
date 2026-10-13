<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route; // <-- add this line

class AppServiceProvider extends ServiceProvider
{
    /**
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
    {
        // Load API routes manually
        if (file_exists(base_path('routes/api.php'))) {
            Route::prefix('api')         // Add /api prefix
                ->middleware('api')      // Use API middleware
                ->group(base_path('routes/api.php'));
        }
    }
}
