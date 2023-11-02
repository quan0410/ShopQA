<?php
declare(strict_types=1);

namespace App\Orchid\Screens\Category;

use App\Models\Category;
use App\Orchid\Layouts\Category\CategoryEditLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CategoryEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Edit category';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'CategoryEditScreen';

    /**
     * @var string
     */
    public $permission = 'platform.systems.category';

    private $category;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Category $category): array
    {
        $this->category = $category;
        if (! $category->exists){
            $this->name = "Create Category";
        }

        return [
            'category' => $this->category,
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
                ->canSee($this->category->exists),

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

            Layout::block(CategoryEditLayout::class)
                ->title(__('Categories name'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->category->exists)
                        ->method('save')
                ),
        ];
    }

    public function save(Category $category, Request $request)
    {
        if ($category->exists){
            $category->update($request['category']);
            Toast::success('Update success');
        }

        if (!$category->exists){
            Category::create($request['category']);
            Toast::success('Categories was created');
        }

        return redirect(route('platform.systems.category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        Toast::success('Categories was deleted');
        return redirect(route('platform.systems.category'));
    }
}
