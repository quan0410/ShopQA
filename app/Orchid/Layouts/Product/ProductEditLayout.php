<?php

namespace App\Orchid\Layouts\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductDetail;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
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

            Input::make('product.weight')
                ->max(20)
                ->type('number')
                ->required()
                ->title(__('Weight'))
                ->placeholder(__('Weight product')),

            Input::make('product.price')
                ->type('number')
                ->required()
                ->title(__('Price'))
                ->placeholder(__('Price product')),

            Input::make('product.discount_price')
                ->type('number')
                ->title(__('Discount price'))
                ->placeholder(__('Discount price')),

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

            Picture::make('product.image')
                ->required()
                ->storage('uploads')
                ->title('upload images product'),

            Select::make('product.featured')
                ->options([
                    0  => '0',
                    1  => '1',
                ])
                ->required()
                ->title(__('Featured')),
        ];
    }
}
