<?php

declare(strict_types=1);

namespace Modules\Activity\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ActivityDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        // Note: Individual seeders can be added here when created
        // $this->call([
        //     ActivitySeeder::class,
        //     SnapshotSeeder::class,
        //     StoredEventSeeder::class,
        // ]);
    }
}
