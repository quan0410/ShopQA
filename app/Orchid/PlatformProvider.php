<?php
declare(strict_types=1);
namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),

            Menu::make(__('Brands'))
                ->icon('task')
                ->route('platform.systems.brand')
                ->permission('platform.systems.brands'),

            Menu::make(__('Categories'))
                ->icon('menu')
                ->route('platform.systems.category')
                ->permission('platform.systems.category'),

            Menu::make(__('Sales'))
                ->icon('calendar')
                ->route('platform.systems.sale')
                ->permission('platform.systems.sales'),

            Menu::make(__('Sliders'))
                ->icon('picture')
                ->route('platform.systems.sliders')
                ->permission('platform.systems.sliders'),

            Menu::make('Products')
                ->icon('drawer')
                ->list([
                    Menu::make('List')->icon('list')->route('platform.systems.products'),
                    Menu::make('Size')->icon('frame')->route('platform.systems.sizes'),
                    Menu::make('Colors')->icon('brush')->route('platform.systems.colors'),
                ]),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make('Profile')
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users'))
                ->addPermission('platform.systems.brands', __('Brands'))
                ->addPermission('platform.systems.category', __('Categories'))
                ->addPermission('platform.systems.sales', __('Sales'))
                ->addPermission('platform.systems.sliders', __('Sliders'))
        ];
    }

    /**
     * @return string[]
     */
    public function registerSearchModels(): array
    {
        return [
            // ...Models
            // \App\Models\User::class
        ];
    }
}
