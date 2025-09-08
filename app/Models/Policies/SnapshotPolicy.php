<?php

declare(strict_types=1);

namespace Modules\Activity\Models\Policies;

use Modules\Activity\Models\Snapshot;
use Modules\Xot\Contracts\ProfileContract;

class SnapshotPolicy extends ActivityBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('snapshot.viewAny'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(ProfileContract $user, Snapshot $snapshot): bool
    {
        return $user->hasPermissionTo('snapshot.view'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('snapshot.create'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(ProfileContract $user, Snapshot $snapshot): bool
    {
        return $user->hasPermissionTo('snapshot.update'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(ProfileContract $user, Snapshot $snapshot): bool
    {
        return $user->hasPermissionTo('snapshot.delete'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(ProfileContract $user, Snapshot $snapshot): bool
    {
        return $user->hasPermissionTo('snapshot.restore'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(ProfileContract $user, Snapshot $snapshot): bool
    {
        return $user->hasPermissionTo('snapshot.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}