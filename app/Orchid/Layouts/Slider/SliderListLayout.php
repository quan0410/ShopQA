<?php
declare(strict_types=1);
namespace App\Orchid\Layouts\Slider;

use App\Models\Slider;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SliderListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'sliders';

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
                ->render(function (Slider $slider){
                    return $slider->id;
                }),

            TD::make('title','Title')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Slider $slider){
                    return $slider->title;
                }),

            TD::make('content','Content')
                ->sort()
                ->cantHide()
                ->width('600px')
                ->render(function (Slider $slider){
                    return $slider->content;
                }),

            TD::make('image','Image')
                ->cantHide()
                ->width('300px')
                ->render(function (Slider $slider){
                    return '<img style="width: 100%;" src=" '.url($slider->image).' "/>';
                }),

            TD::make('is_show','Show')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_NUMERIC)
                ->render(function (Slider $slider){
                    return $slider->is_show;
                }),

            TD::make('created_at','Created')
                ->sort()
                ->cantHide()
                ->render(function (Slider $slider){
                    return $slider->created_at;
                }),

            TD::make('updated_at','Updated')
                ->sort()
                ->cantHide()
                ->render(function (Slider $slider){
                    return $slider->updated_at;
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Slider $slider) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.systems.slider.edit', $slider->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->method('destroy')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->parameters([
                                    'id' => $slider->id,
                                ]),
                        ]);
                }),
        ];
    }
}
