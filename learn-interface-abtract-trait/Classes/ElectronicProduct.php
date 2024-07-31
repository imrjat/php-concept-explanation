<?php

namespace Classes;

use AbstractClasses\Product;
use Interfaces\Discountable;
use Traits\Loggable;

class ElectronicProduct extends Product implements Discountable
{
    use Loggable;

    private $brand;
    private $model;
    private $discountedPrice;

    public function __construct($id, $name, $price, $brand, $model)
    {
        parent::__construct($id, $name, $price);
        $this->brand = $brand;
        $this->model = $model;
    }


    public function getDescription()
    {
        return "{$this->brand} {$this->model} - {$this->name}";
    }

    public function getDiscountedPrice()
    {
        return $this->discountedPrice ?? $this->price;
    }

    public function applyDiscount($percentage)
    {
        $this->discountedPrice = $this->price - ($this->price * $percentage / 100);
        $this->log("Applied {$percentage}% discount to {$this->name} at {$this->discountedPrice}");
    }
}
