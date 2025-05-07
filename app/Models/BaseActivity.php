<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\Activitylog\Models\Activity as SpatieActivity;

/**
 * Classe BaseActivity.
 *
 * Classe base per tutti i modelli di attività nel modulo Activity.
 * Estende il modello Activity di Spatie per fornire funzionalità comuni.
 * Gestisce il tracciamento delle attività e delle modifiche ai modelli.
 */
abstract class BaseActivity extends SpatieActivity {}
