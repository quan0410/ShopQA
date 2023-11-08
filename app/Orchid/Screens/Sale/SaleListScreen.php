<?php
declare(strict_types=1);
namespace App\Orchid\Screens\Sale;

use App\Models\Sales;
use App\Orchid\Layouts\Sale\SaleListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class SaleListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Sales';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'All registered Sales';

    /**
     * @var string
     */
    public $permission = 'platform.systems.sales';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            // Name table.
            'sales' => Sales::filters()
                ->defaultSort('id', 'desc')
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
            ->route('platform.systems.sale.create'),
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
            SaleListLayout::class
        ];
    }

    public function destroy(Sales $sale)
    {
        $sale->delete();
        \Orchid\Support\Facades\Toast::success('sale was deleted');
        return redirect(route('platform.systems.sale'));
    }
}
