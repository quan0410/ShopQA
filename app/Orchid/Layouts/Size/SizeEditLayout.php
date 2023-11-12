<?php

namespace App\Orchid\Layouts\Size;

use App\Models\Color;
use App\Models\Product;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class SizeEditLayout extends Rows
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
            Select::make('size.name')
                ->required()
                ->options([
                    'S' => 'S',
                    'M' => 'M',
                    'XL' => 'XL',
                    'XXL' => 'XXL',
                ])
                ->empty('No Select')
                ->title(__('Size name')),

            Select::make('size.product_id')
                ->fromModel(Product::orderBy('id', 'asc'), 'id')
                ->empty('No Select')
                ->title(__('Product ID')),

            Select::make('size.color')
                ->fromModel(Color::class, 'name')
                ->required()
                ->empty('No Select')
                ->title(__('Color name')),

            Input::make('size.qty')
                ->type('number')
                ->required()
                ->title(__('Qty'))
                ->placeholder(__('Qty')),

        ];
    }
}
