<?php

class Product {
    public int $id;
    public string $name;
    public float $price;
    public Category $category;
    public string $image;
    public string $type;

    public function __construct(int $id, string $name, float $price, Category $category, string $image, string $type) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
        $this->type = $type;
    }

    public function getDetails(): string {
        return "<strong>Nome:</strong> $this->name<br><strong>Categoria:</strong> {$this->category->name}<br><strong>Tipo:</strong> $this->type";
    }

    public function rateProduct(int $rating) {
        // Controllo che il voto sia compreso tra 1 e 5
        if ($rating < 1 || $rating > 5) {
            throw new RatingOutOfRangeException();
        }
         $this->name = $rating;
    }
}