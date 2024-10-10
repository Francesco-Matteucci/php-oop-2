<?php

class Bed extends Product {
    public string $size;
    public string $fabric;


    public function __construct(string $name, string $price, Category $category, string $image, string $size, string $fabric) {
        parent::__construct($name, $price, $category, $image, 'Cuccia');
        $this->size = $size;
        $this->fabric = $fabric;
    }

    public function getDetails(): string {
        return parent::getDetails() . "<br><strong>Taglia:</strong> $this->size<br><strong>Tessuto:</strong> $this->fabric";
    }
}