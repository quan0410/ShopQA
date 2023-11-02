<?php
declare(strict_types=1);
namespace App\Orchid\Layouts\Category;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class CategoryEditLayout extends Rows
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
            Input::make('category.name')
                ->max('20')
                ->type('text')
                ->required(true)
                ->title(__('Category name'))
                ->placeholder(__('Category name')),
        ];
    }
}
