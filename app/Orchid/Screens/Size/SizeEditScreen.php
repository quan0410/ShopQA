<?php

namespace App\Orchid\Screens\Size;

use App\Models\Size;
use App\Orchid\Layouts\Size\SizeEditLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SizeEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Edit Size';

    private $size;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Size $size): array
    {
        $this->size = $size;
        if (! $size->exists) {
            $this->name = "Create Size";
        }
        return [
            'size' => $this->size,
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
                ->canSee($this->size->exists),

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
            Layout::block(SizeEditLayout::class)
                ->title(__('Size name'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->size->exists)
                        ->method('save')
                ),
        ];
    }

    public function save(Size $size, Request $request)
    {
        $s = $size->create($request['size']);
        $s->colors()->attach(
            ['color_id' => $request['size.color']],
            ['qty' => $request['size.qty']]
        );
        Toast::success('Size was created');
        return redirect(route('platform.systems.sizes'));
    }

    public function destroy(Size $size)
    {
        $size->delete();
        Toast::success('Size was deleted');
        return redirect(route('platform.systems.sizes'));
    }

}
