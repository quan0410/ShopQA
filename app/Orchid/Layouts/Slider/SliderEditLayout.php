<?php
declare(strict_types=1);
namespace App\Orchid\Layouts\Slider;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class SliderEditLayout extends Rows
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
            Input::make('slider.title')
                ->type('varchar')
                ->max(255)
                ->required()
                ->title(__('Title'))
                ->placeholder(__('Title Slider')),

            Input::make('slider.content')
                ->type('varchar')
                ->max(255)
                ->required()
                ->title(__('Content'))
                ->placeholder(__('Content Slider')),

            Input::make('slider.url')
                ->type('varchar')
                ->max(255)
                ->required()
                ->title(__(' Link Url'))
                ->placeholder(__('Link Url Slider')),

            Picture::make('slider.image')
                ->storage('uploads')
                ->targetRelativeUrl()
                ->title('Large web banner image, generally in the front and center'),

            Select::make('slider.is_show')
                ->options([
                    0  => '0',
                    1  => '1',
                ])
                ->required()
                ->title(__('Show')),
        ];
    }
}
