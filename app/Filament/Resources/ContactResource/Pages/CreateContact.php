<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\ContactResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Notify\Filament\Resources\ContactResource;

class CreateContact extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    protected static string $resource = ContactResource::class;
}
