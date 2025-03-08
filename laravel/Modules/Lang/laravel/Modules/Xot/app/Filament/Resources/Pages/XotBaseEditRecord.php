<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Forms\Form;

/**
 * Undocumented class.
 */
abstract class XotBaseEditRecord extends FilamenEditRecord
{
    // ...

    public function form(Form $form): Form
    {
        $schema = $this->getFormSchema();
        if (empty($schema)) {
            $resource = $this->getResource();
            $schema = $resource::getFormSchema();
        }

        return $form->schema($schema);
    }
}
