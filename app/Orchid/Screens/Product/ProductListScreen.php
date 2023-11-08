<?php

namespace App\Orchid\Screens\Product;

use App\Models\Product;
use App\Orchid\Layouts\Product\ProductListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ProductListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'List Products';

    /**
     * @var string
     */
    public $permission = 'platform.systems.products';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            // Name table.
            'products' => Product::filters()
                ->defaultSort('id', 'asc')
                ->paginate(20),
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
                ->route('platform.systems.product.create'),
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
            ProductListLayout::class
        ];
    }

    public function destroy(Product $product)
    {
        $product->delete();
        \Orchid\Support\Facades\Toast::success('product was deleted');
        return redirect(route('platform.systems.products'));
    }
}
