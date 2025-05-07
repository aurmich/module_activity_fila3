<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Migrazione per la creazione della tabella degli eventi memorizzati.
 * Questa tabella viene utilizzata per il tracciamento degli eventi nel sistema di event sourcing.
 */
return new class extends XotBaseMigration
{
    /**
     * Esegue la migrazione.
     * Crea la tabella degli eventi memorizzati con i campi necessari per il tracciamento degli eventi.
     */
    public function up(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $this->tableCreate( function ($table) {
            $table->id();
            $table->uuid('aggregate_uuid')->nullable();
            $table->unsignedBigInteger('aggregate_version')->nullable();
            $table->unsignedTinyInteger('event_version')->default(1);
            $table->string('event_class');
            $table->jsonb('event_properties');
            $table->jsonb('meta_data');
            $table->timestamp('created_at');
            $table->index('event_class');
            $table->index('aggregate_uuid');
            $table->unique(['aggregate_uuid', 'aggregate_version']);
        });

        $this->tableUpdate(function ($table) {
            $this->updateTimestamps($table, false);
        });
=======
>>>>>>> ecd5971 (.)
        $this->tableCreate(
            /**
             * Definisce la struttura della tabella degli eventi memorizzati.
             *
             * @param Blueprint $table
             */
            function (Blueprint $table) {
                $table->id();
                $table->uuid('aggregate_uuid')->nullable()->comment('UUID dell\'aggregato associato all\'evento');
                $table->unsignedBigInteger('aggregate_version')->nullable()->comment('Versione dell\'aggregato');
                $table->unsignedTinyInteger('event_version')->default(1)->comment('Versione dell\'evento');
                $table->string('event_class')->comment('Classe dell\'evento');
                $table->jsonb('event_properties')->comment('Proprietà dell\'evento');
                $table->jsonb('meta_data')->comment('Metadati dell\'evento');
                $table->timestamp('created_at')->comment('Data di creazione dell\'evento');
                
                $table->index('event_class', 'stored_events_event_class_index');
                $table->index('aggregate_uuid', 'stored_events_aggregate_uuid_index');
                $table->unique(['aggregate_uuid', 'aggregate_version'], 'stored_events_aggregate_unique');
            }
        );

        $this->tableUpdate(
            /**
             * Aggiorna la tabella aggiungendo i timestamp.
             *
             * @param Blueprint $table
             */
            function (Blueprint $table) {
                $this->updateTimestamps($table, false);
            }
        );
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> ecd5971 (.)
    }
};
