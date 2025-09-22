<?php

declare(strict_types=1);

namespace Modules\Activity\Models\Policies;

use Modules\Activity\Models\Activity;
<<<<<<< HEAD
use Modules\User\Models\Policies\UserBasePolicy;
use Modules\Xot\Contracts\UserContract;

class ActivityPolicy extends UserBasePolicy
=======
use Modules\Xot\Contracts\UserContract;

class ActivityPolicy extends ActivityBasePolicy
>>>>>>> 2eb70e0 (.)
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('activity.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Activity $_activity): bool
=======
    public function view(UserContract $user, Activity $activity): bool
>>>>>>> 2eb70e0 (.)
    {
        return $user->hasPermissionTo('activity.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('activity.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Activity $_activity): bool
=======
    public function update(UserContract $user, Activity $activity): bool
>>>>>>> 2eb70e0 (.)
    {
        return $user->hasPermissionTo('activity.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Activity $_activity): bool
=======
    public function delete(UserContract $user, Activity $activity): bool
>>>>>>> 2eb70e0 (.)
    {
        return $user->hasPermissionTo('activity.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Activity $_activity): bool
=======
    public function restore(UserContract $user, Activity $activity): bool
>>>>>>> 2eb70e0 (.)
    {
        return $user->hasPermissionTo('activity.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Activity $activity): bool
    {
        return $user->hasPermissionTo('activity.forceDelete');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 2eb70e0 (.)
