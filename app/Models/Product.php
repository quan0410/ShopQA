<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'sku',
        'brand_id',
        'product_category_id',
        'description',
        'content',
        'image',
        'price',
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

    public function orderDetails ()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }

    public function reviews ()
    {
        return $this->hasMany(Review::class)->latest()->limit(5);
    }

    public function sales()
    {
        return $this->belongsToMany(Sales::class);
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


}
