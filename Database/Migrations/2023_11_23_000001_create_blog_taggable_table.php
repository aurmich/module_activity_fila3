<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Blog\Models\Taggable;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateBlogTaggableTable.
 */
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class() extends XotBaseMigration {
>>>>>>> 8149186 (up)
=======
return new class extends XotBaseMigration {
>>>>>>> 9715aec (Lint)
    protected ?string $model_class = Taggable::class;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                // $table->foreignId('tag_id')->constrained()->cascadeOnDelete();
                $table->foreignId('tag_id'); // ->cascadeOnDelete();

                $table->morphs('taggable');
                // $table->unique(['tag_id', 'taggable_id', 'taggable_type']);
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('name')) {
                //    $table->string('name');
                // }

                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
    }
};
