<?php

namespace App\Orchid\Screens\Category;

use App\Models\Category;
use App\Orchid\Layouts\Category\CategoryListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class CategoryListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'category';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'All registered category';

    /**
     * @var string
     */
    public $permission = 'platform.systems.category';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'categories' => Category::latest('id')
                ->paginate(),
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
                ->route('platform.systems.category.create'),
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
            CategoryListLayout::class,
        ];
    }

    public function destroy(Category $category)
    {
        $category->delete();
        Toast::success('Categories was deleted');
        return redirect(route('platform.systems.category'));
    }

}
