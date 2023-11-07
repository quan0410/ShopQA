<?php
declare(strict_types=1);
namespace App\Orchid\Screens\Slider;

use App\Models\Slider;
use App\Orchid\Layouts\Slider\SliderListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class SliderListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Sliders';

    /**
     * @var string
     */
    public $permission = 'platform.systems.sliders';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'sliders' => Slider::filters()
                ->defaultSort('id', 'asc')
                ->paginate(10)
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
                ->route('platform.systems.slider.create'),
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
            SliderListLayout::class
        ];
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        Toast::success('Slider was deleted');
        return redirect(route('platform.systems.sliders'));
    }
}
