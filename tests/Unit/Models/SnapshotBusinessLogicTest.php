<?php

declare(strict_types=1);

use Modules\Activity\Models\Snapshot;

describe('Snapshot Business Logic', function () {
    test('snapshot has correct connection configured', function () {
<<<<<<< HEAD
        $snapshot = new Snapshot();
        
=======
        $snapshot = new Snapshot;

>>>>>>> 51ad079 (.)
        expect($snapshot->getConnectionName())->toBe('activity');
    });

    test('snapshot has expected fillable fields for event sourcing', function () {
<<<<<<< HEAD
        $snapshot = new Snapshot();
=======
        $snapshot = new Snapshot;
>>>>>>> 51ad079 (.)
        $expectedFillable = [
            'id',
            'aggregate_uuid',
            'aggregate_version',
            'state',
            'created_at',
<<<<<<< HEAD
            'updated_at'
        ];
        
=======
            'updated_at',
        ];

>>>>>>> 51ad079 (.)
        expect($snapshot->getFillable())->toEqual($expectedFillable);
    });

    test('snapshot extends base snapshot', function () {
        expect(is_subclass_of(Snapshot::class, \Modules\Activity\Models\BaseSnapshot::class))->toBeTrue();
    });

    test('snapshot has factory trait for testing', function () {
        $traits = class_uses(Snapshot::class);
<<<<<<< HEAD
        
=======

>>>>>>> 51ad079 (.)
        expect($traits)->toHaveKey(\Illuminate\Database\Eloquent\Factories\HasFactory::class);
    });

    test('snapshot has uuid scope method', function () {
        expect(method_exists(Snapshot::class, 'scopeUuid'))->toBeTrue();
    });

    test('snapshot can query by aggregate version', function () {
        expect(method_exists(Snapshot::class, 'whereAggregateVersion'))->toBeTrue();
    });
<<<<<<< HEAD
});
=======
});
>>>>>>> 51ad079 (.)
