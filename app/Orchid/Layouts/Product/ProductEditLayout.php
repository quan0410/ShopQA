<?php

namespace App\Orchid\Layouts\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class ProductEditLayout extends Rows
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
            Input::make('product.name')
                ->type('varchar')
                ->max(255)
                ->required()
                ->title(__('Name'))
                ->placeholder(__('Name product')),

            Input::make('product.sku')
                ->type('varchar')
                ->max(255)
                ->required()
                ->title(__('Sku'))
                ->placeholder(__('Sku product')),

            Input::make('product.price')
                ->type('int')
                ->required()
                ->title(__('Price'))
                ->placeholder(__('Price product')),

            Input::make('product.content')
                ->type('text')
                ->required()
                ->title(__('Content'))
                ->placeholder(__('Content product')),

            Input::make('product.description')
                ->type('text')
                ->required()
                ->title(__('Description'))
                ->placeholder(__('Description product')),

            Select::make('product.brand_id')
                ->fromModel(Brand::class, 'name')
                ->empty('No select')
                ->required()
                ->title('Brand'),

            Select::make('product.product_category_id')
                ->fromModel(Category::class, 'name')
                ->empty('No select')
                ->required()
                ->title('Category'),

            Upload::make('product.image'),
        ];
    }
}
