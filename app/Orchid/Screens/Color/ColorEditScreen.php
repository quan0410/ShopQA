<?php

namespace App\Orchid\Screens\Color;

use App\Models\Color;
use App\Orchid\Layouts\Color\ColorEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ColorEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Colors';

    private $color;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Color $color): array
    {
        $this->color = $color;
        return [
            'color' => $this->color
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make(__('Save'))
                ->icon('check')
                ->method('save'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::block(ColorEditLayout::class)
                ->title(__('Color name'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(\Orchid\Support\Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->color->exists)
                        ->method('save')
                ),
        ];
    }

    public function save(Color $color, Request $request)
    {
        if (!$color->exists){
            Color::create($request['color']);
            Toast::success('Color was created');
        }

        return redirect(route('platform.systems.colors'));
    }

    public function destroy(Color $color)
    {
        $color->delete();
        Toast::success('Color was deleted');
        return redirect(route('platform.systems.colors'));
    }
}
