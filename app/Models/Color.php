<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;

class Color extends Model
{
    use HasFactory, Filterable;

    protected $table = "colors";
    protected $fillable = [
            'name',
            'code'
        ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'code'
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

    public function sizes()
    {
        return $this->belongsToMany(Size::class)->withPivot('qty');
    }
}
