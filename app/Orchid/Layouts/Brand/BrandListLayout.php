<?php
declare(strict_types=1);
namespace App\Orchid\Layouts\Brand;

use App\Models\Brand;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BrandListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'brands';

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
                ->filter(TD::FILTER_TEXT)
                ->render(function (Brand $brand){
                    return $brand->id;
                }),

            TD::make('name','Name')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Brand $brand){
                    return $brand->name;
                }),

            TD::make('created_at','Created')
                ->sort()
                ->cantHide()
                ->render(function (Brand $brand){
                    return $brand->created_at;
                }),

            TD::make('updated_at','Updated')
                ->sort()
                ->cantHide()
                ->render(function (Brand $brand){
                    return $brand->updated_at;
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Brand $brand) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.systems.brand.edit', $brand->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->method('destroy')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->parameters([
                                    'id' => $brand->id,
                                ]),
                        ]);
                }),
        ];
    }
}
