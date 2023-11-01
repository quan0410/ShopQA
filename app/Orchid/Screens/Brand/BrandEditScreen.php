<?php

namespace App\Orchid\Screens\Brand;

use App\Models\Brand;
use App\Orchid\Layouts\Brand\BrandEditLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class BrandEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Edit Brand';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'BrandEditScreen';

    /**
     * @var string
     */
    public $permission = 'platform.systems.brands';

    private $brand;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Brand $brand): array
    {
        $this->brand = $brand;

        if (! $brand->exists){
            $this->name = "Create Brand";
        }

        return [
            'brand' => $this->brand,
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
                ->canSee($this->brand->exists),

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

            Layout::block(BrandEditLayout::class)
                ->title(__('Brand name'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->brand->exists)
                        ->method('save')
                ),
        ];
    }

    public function save(Brand $brand, Request $request)
    {
        $request->validate([
            'brand.name' => ['required','max:20',Rule::unique(Brand::class, 'name')->ignore($brand)]
        ]);

        if ($brand->exists){
            $brand->update($request['brand']);
            Toast::success('Update success');
        }

        if (!$brand->exists){
            Brand::create($request['brand']);
            Toast::success('Brand was created');
        }

        return redirect(route('platform.systems.brand'));
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        Toast::success('Brand was deleted');
        return redirect(route('platform.brand'));
    }
}
