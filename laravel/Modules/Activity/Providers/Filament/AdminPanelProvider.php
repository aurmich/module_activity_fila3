<?php

declare(strict_types=1);

namespace Modules\Activity\Providers\Filament;

use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Activity';
}
