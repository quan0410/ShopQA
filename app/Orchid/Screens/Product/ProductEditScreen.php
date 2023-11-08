<?php

namespace App\Orchid\Screens\Product;

use App\Models\Product;
use App\Orchid\Layouts\Product\ProductEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ProductEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'ProductEditScreen';

    protected $product;

    /**
     * @var string
     */
    public $permission = 'platform.systems.products';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Product $product): array
    {
        $this->product = $product;
        if (! $product->exists){
            $this->name = "Create Product";
        }

        return [
            'product' => $this->product,
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
                ->canSee($this->product->exists),

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
            Layout::block(ProductEditLayout::class)
                ->title(__('Create Product'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->product->exists)
                        ->method('save')
                ),
        ];
    }

    public function save(Product $product, Request $request)
    {
        if ($product->exists){
            $product->update($request['product']);
            Toast::success('Update success');
        }

        if (!$product->exists){
            Product::create($request['product']);
            Toast::success('Product was created');
        }

        return redirect(route('platform.systems.products'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        Toast::success('Categories was deleted');
        return redirect(route('platform.systems.products'));
    }
}
