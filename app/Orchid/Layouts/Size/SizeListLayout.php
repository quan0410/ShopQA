<?php

namespace App\Orchid\Layouts\Size;

use App\Models\Size;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SizeListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'sizes';

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
                ->render(function (Size $size){
                    return $size->id;
                }),

            TD::make('name','Name')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Size $size){
                    return $size->name;
                }),

            TD::make('product_id','Product Id')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_NUMERIC)
                ->render(function (Size $size){
                    return $size->product_id;
                }),

            TD::make('created_at','Created')
                ->sort()
                ->cantHide()
                ->render(function (Size $size){
                    return $size->created_at;
                }),

            TD::make('updated_at','Updated')
                ->sort()
                ->cantHide()
                ->render(function (Size $size){
                    return $size->updated_at;
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Size $size) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.systems.size.edit', $size->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->method('destroy')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->parameters([
                                    'id' => $size->id,
                                ]),
                        ]);
                }),
        ];
    }
}
