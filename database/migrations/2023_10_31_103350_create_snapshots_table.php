<?php

declare(strict_types=1);

// namespace Modules\Activity\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Migrazione per la creazione della tabella degli snapshot.
 * Questa tabella viene utilizzata per memorizzare gli snapshot degli aggregati nel sistema di event sourcing.
 */
return new class extends XotBaseMigration
{
    /**
     * Esegue la migrazione.
     * Crea la tabella degli snapshot con i campi necessari per il tracciamento degli stati degli aggregati.
     */
    public function up(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $this->tableCreate( function ($table) {
            $table->bigIncrements('id');
            $table->uuid('aggregate_uuid');
            $table->unsignedInteger('aggregate_version');
            $table->jsonb('state');
            $table->index('aggregate_uuid');
        });

        $this->tableUpdate( function ($table) {
            $this->updateTimestamps($table, false);
        });
=======
>>>>>>> ecd5971 (.)
        $this->tableCreate(
            /**
             * Definisce la struttura della tabella degli snapshot.
             *
             * @param Blueprint $table
             */
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->uuid('aggregate_uuid')->comment('UUID dell\'aggregato');
                $table->unsignedInteger('aggregate_version')->comment('Versione dell\'aggregato');
                $table->jsonb('state')->comment('Stato dell\'aggregato serializzato');
                $table->index('aggregate_uuid', 'snapshots_aggregate_uuid_index');
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
