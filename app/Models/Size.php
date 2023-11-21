<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $table = "sizes";
    protected $fillable = [
        'name',
        'product_id'
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'product_id',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'product_id',
        'created_at',
        'updated_at',
    ];

    public function colors()
    {
        return $this->belongsToMany(Color::class)->withPivot('qty');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
