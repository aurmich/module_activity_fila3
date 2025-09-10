<?php

declare(strict_types=1);

namespace Modules\Activity\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Service Provider per il modulo Activity.
 *
 * Gestisce la registrazione e il boot del modulo per il tracciamento delle attività utente.
 *
 * @phpstan-type ModuleConfig array{name: string, alias: string, description: string, keywords: array<int, string>, priority: int, providers: array<int, class-string>}
 */
class ActivityServiceProvider extends XotBaseServiceProvider
{
    /**
     * Nome del modulo.
<<<<<<< HEAD
     *
     * @var string
=======
>>>>>>> 51ad079 (.)
     */
    public string $name = 'Activity';

    /**
     * Directory del modulo.
<<<<<<< HEAD
     *
     * @var string
=======
>>>>>>> 51ad079 (.)
     */
    protected string $module_dir = __DIR__;

    /**
     * Namespace del modulo.
<<<<<<< HEAD
     *
     * @var string
=======
>>>>>>> 51ad079 (.)
     */
    protected string $module_ns = __NAMESPACE__;

    /**
     * Boot del service provider.
     *
     * Configura il modulo Activity e registra le configurazioni specifiche.
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> 51ad079 (.)
     */
    public function boot(): void
    {
        parent::boot();

        // Registro solo le configurazioni specifiche del modulo
        $this->registerConfig();
    }

    /**
     * Registra i servizi del provider.
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> 51ad079 (.)
     */
    public function register(): void
    {
        parent::register();
        // Additional register logic can be added here
    }
<<<<<<< HEAD
    
    /**
     * Registra le configurazioni del modulo.
     *
     * @return void
=======

    /**
     * Registra le configurazioni del modulo.
>>>>>>> 51ad079 (.)
     */
    protected function registerConfig(): void
    {
        $this->publishes([
            module_path($this->name, 'config/config.php') => config_path('activity.php'),
        ], 'config');
<<<<<<< HEAD
        
=======

>>>>>>> 51ad079 (.)
        $this->mergeConfigFrom(
            module_path($this->name, 'config/config.php'), 'activity'
        );
    }
}
