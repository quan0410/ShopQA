<?php

namespace App\Orchid\Layouts\Brand;

use App\Models\Brand;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class BrandEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): array
    {
        return [
            Input::make('brand.name')
                ->max('20')
                ->type('text')
                ->required(true)
                ->title(__('Brand name'))
                ->placeholder(__('Brand name')),
        ];
    }
}
