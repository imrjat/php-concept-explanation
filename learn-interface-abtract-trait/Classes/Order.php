<?php

namespace Classes;

use Traits\Loggable;

class Order
{
    use Loggable;

    public function __construct(protected string $orderId , protected array $items = [])
    {
    }

    public function addToCart(ElectronicProduct $product){
        $this->items[] = $product;
    }

    public function getTotal()
    {
        return array_reduce($this->items, function ($total, $item) {
            return $total + $item->getDiscountedPrice();
        }, 0);
    }

    public function displayOrder()
    {
        echo "Order ID: {$this->orderId}\n";
        foreach ($this->items as $item) {
            echo "- {$item->getDescription()}: ₹" . number_format($item->getDiscountedPrice(), 2) . "\n";
        }
        echo "Total: ₹" . number_format($this->getTotal(), 2) . "\n";
    }

}
