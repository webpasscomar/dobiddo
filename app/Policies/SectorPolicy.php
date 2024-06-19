<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Sector;
use Illuminate\Auth\Access\HandlesAuthorization;

class SectorPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view sectors');
    }

    public function view(User $user, Sector $sector)
    {
        return $user->hasPermissionTo('view sectors');
    }

    public function create(User $user)
    {
        return $user->hasPermissionTo('create sectors');
    }

    public function update(User $user, Sector $sector)
    {
        return $user->hasPermissionTo('edit sectors');
    }

    public function delete(User $user, Sector $sector)
    {
        return $user->hasPermissionTo('delete sectors');
    }

    public function restore(User $user, Sector $sector)
    {
        return $user->hasPermissionTo('restore sectors');
    }

    public function forceDelete(User $user, Sector $sector)
    {
        return $user->hasPermissionTo('force delete sectors');
    }
}
