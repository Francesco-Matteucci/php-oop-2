<?php
require_once __DIR__ . '/traits/Discountable.php';

class Food extends Product {
    use Discountable;

    public float $weight;
    public string $expiryDate;

    public function __construct(string $name, string $price, Category $category, string $image, float $weight, string $expiryDate) {
        parent::__construct($name, $price, $category, $image, 'Cibo');
        $this->weight = $weight;
        $this->expiryDate = $expiryDate;
    }

    public function getDetails(): string {
        return parent::getDetails() . "<br><strong>Peso:</strong> $this->weight kg<br><strong>Scadenza:</strong> $this->expiryDate";
    }
}