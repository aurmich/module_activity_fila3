<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    public function up(): void
    {
        $this->tableCreate(
<<<<<<< HEAD
=======
<<<<<<< HEAD
             function ($table) {
            $table->bigIncrements('id');
            $table->string('log_name')->nullable();
            $table->text('description');
            $table->nullableMorphs('subject', 'subject');
            $table->nullableMorphs('causer', 'causer');
            $table->json('properties')->nullable();
            $table->index('log_name');
            $table->uuid('batch_uuid')->nullable();
            $table->string('event')->nullable();
=======
>>>>>>> ecd5971 (.)
            /**
             * @param Blueprint $table
             */
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('log_name')->nullable();
                $table->text('description');
                $table->nullableMorphs('subject', 'subject');
                $table->nullableMorphs('causer', 'causer');
                $table->json('properties')->nullable();
                $table->index('log_name');
                $table->uuid('batch_uuid')->nullable();
                $table->string('event')->nullable();
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> ecd5971 (.)
            }
        );

        $this->tableUpdate(
<<<<<<< HEAD
=======
<<<<<<< HEAD
             function ($table) {
=======
>>>>>>> ecd5971 (.)
            /**
             * @param Blueprint $table
             */
            function (Blueprint $table) {
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> ecd5971 (.)
                $this->updateTimestamps($table, true);
            }
        );
    }
};
