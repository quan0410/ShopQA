<?php

namespace App\Models;


use Carbon\Carbon;

class User extends \Illuminate\Foundation\Auth\User
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
        'permissions',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions'          => 'array',
        'email_verified_at'    => 'datetime',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'email',
        'address',
        'password',
        'permissions',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'email',
        'address',
        'password',
        'updated_at',
        'created_at',
    ];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('m-d-Y');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('m-d-Y');
    }

    public function review()
    {
        return $this->hasMany(Review::class)->latest();
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

}
