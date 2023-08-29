<?php

namespace App\Service\Product;

use App\Repositories\Product\ProductRepositoryinterface;
use App\Service\BaseServices;

class ProductServices extends BaseServices implements ProductServicesInterface
{

    public $repository;

    public function __construct(ProductRepositoryinterface $productRepositoryinterface)
    {
        $this->repository = $productRepositoryinterface;
    }
}
