<?php

namespace AbstractClasses;

abstract class Product
{
    public function __construct(protected int $id, protected string $name, protected float|int $price)
    {
    }

    abstract public function getDescription();

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
