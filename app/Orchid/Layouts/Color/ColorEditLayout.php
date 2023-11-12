<?php

namespace App\Orchid\Layouts\Color;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class ColorEditLayout extends Rows
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
            Input::make('color.name')
                ->type('text')
                ->required(true)
                ->title(__('Color name'))
                ->placeholder(__('Color name')),

            Input::make('color.code')
                ->type('text')
                ->required(true)
                ->title(__('Color code'))
                ->placeholder(__('Color code')),
        ];
    }
}
