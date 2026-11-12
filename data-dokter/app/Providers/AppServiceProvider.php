<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
{
    Gate::define('lihat-kontak-dokter', function (User $user) {
        return $user->hasRole('admin', 'staff', 'pasien');
    });

    Gate::define('kelola-dokter', function (User $user) {
        return $user->hasRole('admin', 'staff');
    });
}
}