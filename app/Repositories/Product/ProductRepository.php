<?php


namespace App\Repositories\Product;


use App\Models\Product;
use App\Repositories\BaseRepositories;

class ProductRepository extends BaseRepositories implements ProductRepositoryinterface
{

    public function getModel()
    {
        return Product::class;
    }
}
