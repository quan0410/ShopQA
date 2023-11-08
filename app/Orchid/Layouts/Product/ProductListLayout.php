<?php

namespace App\Orchid\Layouts\Product;

use App\Models\Product;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ProductListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'products';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('id','ID')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_NUMERIC)
                ->render(function (Product $product){
                    return $product->id;
                }),

            TD::make('name','Name')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Product $product){
                    return $product->name;
                }),

            TD::make('sku','Sku')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Product $product){
                    return $product->sku;
                }),

            TD::make('price','Price')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Product $product){
                    return $product->price;
                }),

            TD::make('brand_id','Brand Id')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Product $product){
                    return $product->brand['name'] ?? " ";
                }),

            TD::make('product_category_id','Category Id')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Product $product){
                    return $product->category['name'] ?? " ";
                }),

            TD::make('discount_price','Discount Price')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Product $product){
                    return $product->discount_price;
                }),

            TD::make('weight','Weight')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Product $product){
                    return $product->weight;
                }),

            TD::make('featured','Featured')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_NUMERIC)
                ->render(function (Product $product){
                    return $product->featured;
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Product $product) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.systems.slider.edit', $product->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->method('destroy')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->parameters([
                                    'id' => $product->id,
                                ]),
                        ]);
                }),
        ];
    }
}
