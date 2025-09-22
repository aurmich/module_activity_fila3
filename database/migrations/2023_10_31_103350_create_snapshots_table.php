<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
>>>>>>> 2eb70e0 (.)
    public function up(): void
    {
        $this->tableCreate(
            /**
             * @param Blueprint $table
             */
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->uuid('aggregate_uuid');
                $table->unsignedInteger('aggregate_version');
                $table->jsonb('state');
                $table->index('aggregate_uuid');
<<<<<<< HEAD
            },
=======
            }
>>>>>>> 2eb70e0 (.)
        );

        $this->tableUpdate(
            /**
             * @param Blueprint $table
             */
            function (Blueprint $table) {
                $this->updateTimestamps($table, false);
<<<<<<< HEAD
            },
=======
            }
>>>>>>> 2eb70e0 (.)
        );
    }
};
