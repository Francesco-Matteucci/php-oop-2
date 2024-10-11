<?php
require_once __DIR__ . '/traits/Discountable.php';

class Bed extends Product {
    use Discountable;

    public string $size;
    public string $fabric;

    public function __construct(int $id, string $name, string $price, Category $category, string $image, string $size, string $fabric) {
        parent::__construct($id, $name, $price, $category, $image, 'Cuccia');
        $this->size = $size;
        $this->fabric = $fabric;
    }

    public function getDetails(): string {
        return parent::getDetails() . "<br><strong>Taglia:</strong> $this->size<br><strong>Tessuto:</strong> $this->fabric";
    }
}