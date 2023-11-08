<?php
declare(strict_types=1);
namespace App\Orchid\Layouts\Category;

use App\Models\Category;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

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
                ->render(function (Category $category){
                    return $category->id;
                }),

            TD::make('name','Name')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Category $category){
                    return $category->name;
                }),

            TD::make('created_at','Created')
                ->sort()
                ->cantHide()
                ->render(function (Category $category){
                    return $category->created_at;
                }),

            TD::make('updated_at','Updated')
                ->sort()
                ->cantHide()
                ->render(function (Category $category){
                    return $category->updated_at;
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Category $category) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.systems.category.edit', $category->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->method('destroy')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->parameters([
                                    'id' => $category->id,
                                ]),
                        ]);
                }),
        ];
    }
}
