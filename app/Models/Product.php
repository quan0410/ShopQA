<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Orchid\Filters\Filterable;

class Product extends Model
{
    use HasFactory,Filterable;

    protected $table = 'products';
    protected $fillable = [
        'id',
        'sku',
        'price',
        'brand_id',
        'product_category_id',
        'content',
        'name',
        'description',
        'image',
        'discount_price',
        'weight',
        'featured',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'sku',
        'price',
        'brand_id',
        'product_category_id',
        'name',
        'discount_price',
        'weight',
        'featured',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'sku',
        'price',
        'brand_id',
        'product_category_id',
        'name',
        'discount_price',
        'weight',
        'featured',
    ];

    public function brand ()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function category ()
    {
        return $this->belongsTo(Category::class, 'product_category_id', 'id');
    }

    public function productImage()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id')->limit(4);
    }

    public function sizes()
    {
        return $this->hasMany(Size::class, 'product_id', 'id');
    }

    public function productDetails ()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function orderDetails ()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }

    public function reviews ()
    {
        return $this->hasMany(Review::class)->latest()->limit(5);
    }

    public function sale()
    {
        return $this->hasOne(Sales::class);
    }

    public function scopeBestSellers($query)
    {
        return $query->selectRaw('* ,(price - discount_price) as discount')->latest("discount")->limit(8);
    }

    public function scopeHotSales($query)
    {
        return $query->whereNotNull("discount_price")->latest("updated_at")->limit(8);
    }

    public function scopeNew($query)
    {
        return $query->latest()->limit(8);
    }

    public function scopeFeatured($query)
    {
        return $query->where("featured", true)->limit(8);
    }

    public function Search($request)
    {
//        dd($request);
        $search = $request->search ?? '';
        $size = $request->search ?? '';
        $color = $request->search ?? '';
        $products = Product::where('name','like','%'. $search .'%')->orwhere('description','like','%'. $search .'%')->orderBy('created_at','DESC')->paginate(12);
        return $products;
//        $products->items()[0]->getAttributes();
    }
}
