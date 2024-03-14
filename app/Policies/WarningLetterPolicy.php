<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Warning_Letter;
use Illuminate\Auth\Access\Response;

class WarningLetterPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Warning_Letter $warningLetter): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Warning_Letter $warningLetter): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Warning_Letter $warningLetter): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Warning_Letter $warningLetter): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Warning_Letter $warningLetter): bool
    {
        //
    }
}
