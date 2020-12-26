<?php

namespace Passiflora\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Passiflora\Providers\PassifloraEloquentUserProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'Passiflora\Models\Model' => 'Passiflora\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::provider('passiflora-eloquent', function ($app, array $config) {
            return new PassifloraEloquentUserProvider($app['hash'], $config['model']);
        });
    }
}
