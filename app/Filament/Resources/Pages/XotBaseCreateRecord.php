<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
=======
use Filament\Forms;
>>>>>>> origin/dev
use Filament\Resources\Pages\CreateRecord;

abstract class XotBaseCreateRecord extends CreateRecord
{
<<<<<<< HEAD
=======
    /**
     * Get the form schema with common fields.
     */
    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema($this->getFormSchema());
        // ->columns($this->getFormColumns())
        // ->statePath('data')
    }

>>>>>>> origin/dev
    /**
     * Get the number of form columns.
     */
    protected function getFormColumns(): int|array
    {
        return 1;
    }
<<<<<<< HEAD
=======

    /**
     * Get the form schema.
     *
     * @return array<Forms\Components\Component>
     */
    protected function getFormSchema(): array
    {
        return [];
    }
>>>>>>> origin/dev
}
