<?php

namespace App\Orchid\Screens\Color;

use App\Models\Color;
use App\Orchid\Layouts\Color\ColorListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ColorListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Colors';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'All registered Colors';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'colors' => Color::filters()
                ->defaultSort('id', 'asc')
                ->paginate(10),
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
            Link::make(__('Add'))
                ->icon('plus')
                ->route('platform.systems.color.create'),
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
            ColorListLayout::class,
        ];
    }

    public function destroy(Color $color)
    {
        $color->delete();
        Toast::success('Color was deleted');
        return redirect(route('platform.systems.colors'));
    }
}
