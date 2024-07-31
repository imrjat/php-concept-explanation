<?php

namespace Interfaces;

interface Discountable
{
    public function applyDiscount($percentage);
    public function getDiscountedPrice();
}
