<?php

declare(strict_types=1);

use Modules\Activity\Models\Activity;
use Modules\User\Models\User;

test('user can create activity', function () {
    $user = User::factory()->create();
<<<<<<< HEAD

=======
    
>>>>>>> f371b59 (.)
    $activityData = [
        'name' => 'Test Activity',
        'description' => 'Test Description',
        'user_id' => $user->id,
    ];
<<<<<<< HEAD

    $activity = createActivity($activityData);

=======
    
    $activity = createActivity($activityData);
    
>>>>>>> f371b59 (.)
    expect($activity)
        ->toBeActivity()
        ->and($activity->name)->toBe('Test Activity')
        ->and($activity->user_id)->toBe($user->id);
});

test('activity can be updated', function () {
    $activity = createActivity();
<<<<<<< HEAD

=======
    
>>>>>>> f371b59 (.)
    $activity->update([
        'name' => 'Updated Activity',
        'description' => 'Updated Description',
    ]);
<<<<<<< HEAD

=======
    
>>>>>>> f371b59 (.)
    expect($activity->fresh())
        ->name->toBe('Updated Activity')
        ->description->toBe('Updated Description');
});

test('activity can be deleted', function () {
    $activity = createActivity();
<<<<<<< HEAD

    $activity->delete();

=======
    
    $activity->delete();
    
>>>>>>> f371b59 (.)
    expect(Activity::find($activity->id))->toBeNull();
});

test('activity belongs to user', function () {
    $user = User::factory()->create();
    $activity = createActivity(['user_id' => $user->id]);
<<<<<<< HEAD

=======
    
>>>>>>> f371b59 (.)
    expect($activity->user)
        ->toBeInstanceOf(User::class)
        ->and($activity->user->id)->toBe($user->id);
});
