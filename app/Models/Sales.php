<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $fillable = [
        'title',
        'content',
        'time_start',
        'time_end',
        'is_show',
        'percent'
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'title',
        'content',
        'time_start',
        'time_end',
        'is_show'
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'title',
        'content',
        'time_start',
        'time_end',
        'is_show',
        'created_at',
        'updated_at',
    ];

    protected $with = ['products'];
    protected static function boot()
    {
        parent::boot();

        self::deleted(function ($model){
            $model->products()->detach();
        });
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
