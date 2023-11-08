<?php
declare(strict_types=1);
namespace App\Orchid\Screens\Sale;

use App\Models\Product;
use App\Models\Sales;
use App\Orchid\Layouts\Sale\SaleEditLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SaleEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Edit sale';

    /**
     * @var string
     */
    public $permission = 'platform.systems.sales';

    /**
     * @var Sales
     */
    private $sale;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Sales $sale): array
    {
        $this->sale = $sale;
        if (! $sale->exists) {
            $this->name = "Create Sale";
        }
        return [
            'sale' => $this->sale,
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
                ->canSee($this->sale->exists),

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
            Layout::block(SaleEditLayout::class)
                ->title(__('Sales Information'))
                ->description(__('Update information in sales.'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->sale->exists)
                        ->method('save')
                ),
        ];
    }
    public function save(Sales $sale, Request $request)
    {
        $request->validate([
            'sale.title' => [
                'required',
                Rule::unique(Sales::class, 'title')->ignore($sale),
            ],
        ]);
        $productId = $request['sale.product_id'];
        $product = Product::find($productId);
        if ($product) {
            if ($sale->exists) {
                $sale->update($request['sale']);
                Toast::success('Update success');
            }

            if (!$sale->exists){
                Sales::create($request['sale']);
                Toast::success('Sale was created');
            }
        } else {
            Toast::error('Product id does not exist');
            return redirect(route('platform.systems.sale.create'));
        }

        return redirect(route('platform.systems.sale'));
    }

    public function destroy(Sales $sale)
    {
        $sale->delete();
        Toast::success('Sale was deleted');
        return redirect(route('platform.systems.sale'));
    }
}
