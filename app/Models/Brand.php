<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;

class Brand extends Model
{
    use HasFactory, Filterable;

    protected $table = 'brands';
    protected $fillable = ['name'];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name'
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];

    public function products ()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}
