<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

use Modules\Activity\Filament\Resources\SnapshotResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListSnapshots extends XotBaseListRecords
{
    protected static string $resource = SnapshotResource::class;
}
