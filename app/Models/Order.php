<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'note',
        'method',
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails ()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
