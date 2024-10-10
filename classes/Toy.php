<?php

class Toy extends Product {
    public string $material;
    public string $size;

    public function __construct(string $name, string $price, Category $category, string $image, string $material, string $size) {
        parent::__construct($name, $price, $category, $image, 'Gioco');
        $this->material = $material;
        $this->size = $size;
    }

    public function getDetails(): string {
        return parent::getDetails() . "<br><strong>Materiale:</strong> $this->material<br><strong>Dimensione:</strong> $this->size";
    }
}