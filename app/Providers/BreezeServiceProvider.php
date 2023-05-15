<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BreezeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function registered(CreatesNewUsers $user)
    {
        if ($user->role === 'admin') {
            return Redirect::route('admin.home');
        } else {
            return Redirect::route('user.home');
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }
        });

        Jetstream::createUsersUsing(CreateNewUser::class);

        Jetstream::roles([
            'admin' => 'Administrator',
            'user' => 'Regular User',
        ]);

        if (Features::hasTeamFeatures()) {
            Jetstream::createTeamsUsing(CreateNewTeam::class);

            Jetstream::teamMembershipsCanBeManaged();
        }

        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });
    }
}