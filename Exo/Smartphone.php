<?php

namespace Shop;

require_once 'Product.php';

class Smartphone extends Product
{
    private ?string $model;
    private ?string $brand;
}
