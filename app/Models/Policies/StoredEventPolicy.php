<?php

declare(strict_types=1);

namespace Modules\Activity\Models\Policies;

use Modules\Activity\Models\StoredEvent;
use Modules\Xot\Contracts\ProfileContract;

class StoredEventPolicy extends ActivityBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('stored_event.viewAny'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, StoredEvent $stored_event): bool
    {
        return $user->hasPermissionTo('stored_event.view'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('stored_event.create'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, StoredEvent $stored_event): bool
    {
        return $user->hasPermissionTo('stored_event.update'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, StoredEvent $stored_event): bool
    {
        return $user->hasPermissionTo('stored_event.delete'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(ProfileContract $user, StoredEvent $stored_event): bool
    {
        return $user->hasPermissionTo('stored_event.restore'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(ProfileContract $user, StoredEvent $stored_event): bool
    {
        return $user->hasPermissionTo('stored_event.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}