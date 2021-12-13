<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        // untuk page
        Paginator::useBootstrap();
        
        // untuk gate (admin)
        Gate::define('admin', function(User $user) {
           return $user->is_admin;
        });

        // untuk notasi currency 
        Blade::directive('money', function ($amount) {
            return "<?php echo 'Rp' . number_format($amount, 2); ?>";
        });
    }
}
