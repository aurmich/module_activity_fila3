<?php

declare(strict_types=1);

namespace Modules\Activity\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Route Service Provider per il modulo Activity.
 *
 * Gestisce la registrazione delle route per il modulo Activity.
 */
class RouteServiceProvider extends XotBaseRouteServiceProvider
{
<<<<<<< HEAD
    /**
=======
   /**
>>>>>>> f371b59 (.)
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Activity\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
<<<<<<< HEAD

=======
>>>>>>> f371b59 (.)
    public string $name = 'Activity';
}
