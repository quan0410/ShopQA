<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'id';
    protected $guarded = [];
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
