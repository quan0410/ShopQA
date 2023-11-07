<?php
declare(strict_types=1);
namespace App\Orchid\Screens\Brand;

use App\Models\Brand;
use App\Orchid\Layouts\Brand\BrandListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class BrandListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Brand';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'All registered brands';

    /**
     * @var string
     */
    public $permission = 'platform.systems.brands';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'brands' => Brand::filters()
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
                ->route('platform.systems.brand.create'),
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
            BrandListLayout::class,
        ];
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        Toast::success('Brand was deleted');
        return redirect(route('platform.systems.brand'));
    }

}
