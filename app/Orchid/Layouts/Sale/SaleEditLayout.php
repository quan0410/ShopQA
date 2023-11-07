<?php
declare(strict_types=1);
namespace App\Orchid\Layouts\Sale;

use Carbon\Traits\Timestamp;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class SaleEditLayout extends Rows
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
            Input::make('sale.title')
                ->type('varchar')
                ->max(255)
                ->required()
                ->title(__('Title'))
                ->placeholder(__('Title Sale')),

            TextArea::make('sale.content')
                ->max(255)
                ->required()
                ->rows(5)
                ->title(__('Content'))
                ->placeholder(__('Content Sale')),

            Input::make('sale.product_id')
                ->type('number')
                ->required()
                ->title(__('Product Id'))
                ->placeholder(__('Product Id')),

            Select::make('sale.is_show')
                ->options([
                    0  => '0',
                    1  => '1',
                ])
                ->required()
                ->title(__('Show')),

            DateTimer::make('sale.time_start')
                ->enableTime()
                ->title('Start')
                ->required()
                ->placeholder('Sale start time'),

            DateTimer::make('sale.time_end')
                ->enableTime()
                ->title('End')
                ->required()
                ->placeholder('Sale End time'),

        ];
    }
}
