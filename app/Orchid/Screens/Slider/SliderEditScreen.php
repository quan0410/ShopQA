<?php
declare(strict_types=1);
namespace App\Orchid\Screens\Slider;

use App\Models\Slider;
use App\Orchid\Layouts\Slider\SliderEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SliderEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Edit Slider';

    /**
     * @var string
     */
    public $permission = 'platform.systems.sliders';

    private $slider;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Slider $slider): array
    {
        $this->slider = $slider;
        if (! $slider->exists) {
            $this->name = "Create Slider";
        }
        return [
            'slider' => $this->slider
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
            Button::make(__('Remove'))
                ->icon('trash')
                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                ->method('destroy')
                ->canSee($this->slider->exists),

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
            Layout::block(SliderEditLayout::class)
                ->title(__('Brand name'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->slider->exists)
                        ->method('save')
                ),
        ];
    }
    /**
     * @param Slider $slider
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Slider $slider, Request $request)
    {
        if ($slider->exists){
            $slider->update($request['slider']);
            Toast::success('Update success');
        }

        if (!$slider->exists){
            Slider::create($request['slider']);
            Toast::success('Slider was created');
        }

        return redirect(route('platform.systems.sliders'));
    }

    /**
     * @param Slider $slider
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        Toast::success('Slider was deleted');
        return redirect(route('platform.systems.sliders'));
    }
}
