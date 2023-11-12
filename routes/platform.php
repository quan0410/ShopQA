<?php

declare(strict_types=1);

use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Profile'), route('platform.profile'));
    });

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit');

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('Create'), route('platform.systems.users.create'));
    });

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Users'), route('platform.systems.users'));
    });

// Platform > System > Roles > Role
Route::screen('roles/{roles}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(function (Trail $trail, $role) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Role'), route('platform.systems.roles.edit', $role));
    });

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Create'), route('platform.systems.roles.create'));
    });

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Roles'), route('platform.systems.roles'));
    });

// Systems Brands
Route::screen('brands',\App\Orchid\Screens\Brand\BrandListScreen::class)->name('platform.systems.brand');
Route::screen('brand/create',\App\Orchid\Screens\Brand\BrandEditScreen::class)->name('platform.systems.brand.create');
Route::screen('brand/{brand}/edit',\App\Orchid\Screens\Brand\BrandEditScreen::class)->name('platform.systems.brand.edit');

// Systems categories
Route::screen('categories',\App\Orchid\Screens\Category\CategoryListScreen::class)->name('platform.systems.category');
Route::screen('category/create',\App\Orchid\Screens\Category\CategoryEditScreen::class)->name('platform.systems.category.create');
Route::screen('category/{category}/edit',\App\Orchid\Screens\Category\CategoryEditScreen::class)->name('platform.systems.category.edit');

// Systems sales
Route::screen('sales',\App\Orchid\Screens\Sale\SaleListScreen::class)->name('platform.systems.sale');
Route::screen('sale/create',\App\Orchid\Screens\Sale\SaleEditScreen::class)->name('platform.systems.sale.create');
Route::screen('sale/{sale}/edit',\App\Orchid\Screens\Sale\SaleEditScreen::class)->name('platform.systems.sale.edit');

// Systems sliders
Route::screen('sliders',\App\Orchid\Screens\Slider\SliderListScreen::class)->name('platform.systems.sliders');
Route::screen('slider/create',\App\Orchid\Screens\Slider\SliderEditScreen::class)->name('platform.systems.slider.create');
Route::screen('slider/{slider}/edit',\App\Orchid\Screens\Slider\SliderEditScreen::class)->name('platform.systems.slider.edit');

// Systems products
Route::screen('products',\App\Orchid\Screens\Product\ProductListScreen::class)->name('platform.systems.products');
Route::screen('product/create',\App\Orchid\Screens\Product\ProductEditScreen::class)->name('platform.systems.product.create');
Route::screen('product/{product}/edit',\App\Orchid\Screens\Product\ProductEditScreen::class)->name('platform.systems.product.edit');

// Systems colors
Route::screen('colors',\App\Orchid\Screens\Color\ColorListScreen::class)->name('platform.systems.colors');
Route::screen('color/create',\App\Orchid\Screens\Color\ColorEditScreen::class)->name('platform.systems.color.create');

// Systems sizes
Route::screen('sizes',\App\Orchid\Screens\Size\SizeListScreen::class)->name('platform.systems.sizes');
Route::screen('size/create',\App\Orchid\Screens\Size\SizeEditScreen::class)->name('platform.systems.size.create');
Route::screen('size/{size}/edit',\App\Orchid\Screens\Size\SizeEditScreen::class)->name('platform.systems.size.edit');

//Route::screen('idea', 'Idea::class','platform.screens.idea');
