<?php

namespace App\Orchid\Screens\Size;

use App\Models\Size;
use App\Orchid\Layouts\Size\SizeListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class SizeListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Sizes';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'All registered Sizes';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'sizes' => Size::filters()
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
                ->route('platform.systems.size.create'),
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
            SizeListLayout::class
        ];
    }

    public function destroy(Size $size)
    {
        $size->delete();
        Toast::success('Size was deleted');
        return redirect(route('platform.systems.sizes'));
    }
}
