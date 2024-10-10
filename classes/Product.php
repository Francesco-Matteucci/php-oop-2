<?php

class Product {
    public string $name;
    public float $price;
    public Category $category;
    public string $image;
    public string $type;

    public function __construct(string $name, float $price, Category $category, string $image, string $type) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
        $this->type = $type;
    }

    public function getDetails(): string {
        return "<strong>Nome:</strong> $this->name<br><strong>Categoria:</strong> {$this->category->name}<br><strong>Tipo:</strong> $this->type";
    }
}