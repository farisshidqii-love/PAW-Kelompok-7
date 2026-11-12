<?php

namespace App\Policies;

use App\Models\Dokter;
use App\Models\User;

class DokterPolicy
{
    // Boleh mengubah data dokter INI?
    public function update(User $user, Dokter $dokter): bool
    {
        if ($user->hasRole('admin')) {
            return true;
        }

        // Staff boleh edit, asalkan bukan dokter dengan spesialisasi 'Umum' (contoh syarat berbasis data)
        return $user->hasRole('staff') && $dokter->spesialis !== 'Umum';
    }

    // Boleh menghapus data dokter INI?
    public function delete(User $user, Dokter $dokter): bool
    {
        return $user->hasRole('admin');
    }
}