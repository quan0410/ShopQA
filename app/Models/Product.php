<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'sku',
        'brand_id',
        'percent_discount',
        'product_category_id',
        'original_price',
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
        'percent_discount',
        'brand_id',
        'original_price',
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
        'percent_discount',
        'product_category_id',
        'original_price',
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

    // Các Product giảm giá từ thấp tới cao
    public function scopeBestSellers()
    {
//        $results = Order::join('order_details', 'orders.id', '=', 'order_details.order_id')
//            ->join('products', 'order_details.product_id', '=', 'products.id')
//            ->where('orders.status', 'completed')
//            ->groupBy('order_details.product_id')
//            ->select('products.*', 'products.id', DB::raw('SUM(order_details.qty) as quantity'))
//            ->orderBy('quantity')
//            ->limit(8)
//            ->get();
        $results = Order::join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('orders.status', 'completed')
            ->groupBy('order_details.product_id')
            ->select('order_details.product_id', DB::raw('SUM(order_details.qty) as quantity'))
            ->orderByDesc('quantity')->get();
//        dd($results);
        $items = [];
        foreach ($results as $item) {
            $product = Product::find($item->product_id);
            $items[$item->product_id] = $product;
        }
//        dd($items);
        return $items;
    }

    // Các Product giảm giá mới nhất
    public function scopeHotSales($query)
    {
        return $query->whereNotNull("discount_price")->latest("updated_at")->limit(8);
    }

    // Các Product mới nhất
    public function scopeNew($query)
    {
        return $query->latest()->limit(8);
    }

    // Các Product nổi bật
    public function scopeFeatured($query)
    {
        return $query->where("featured", true)->limit(8);
    }


}
