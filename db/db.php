<?php

require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/Food.php';
require_once __DIR__ . '/../classes/Toy.php';
require_once __DIR__ . '/../classes/Bed.php';

$dogCategory = new Category("Cani", "fa fa-dog");
$catCategory = new Category("Gatti", "fa fa-cat");

$products = [
    
 // Prodotti per Cani
 new Food(1, "Cibo per Cani", 29.99, $dogCategory, "img/dog_food.jpg", 2, "2025-01-01"),
 new Toy(2, "Gioco per Cani", 19.99, $dogCategory, "img/dog_toy.jpg", "Gomma", "Medio"),
 new Bed(3, "Cuccia per Cani", 49.99, $dogCategory, "img/dog_bed.jpg", "Grande", "Cotone"),
 
 // Prodotti per Gatti
 new Food(4, "Cibo per Gatti", 25.99, $catCategory, "img/cat_food.jpg", 1.5, "2024-12-31"),
 new Toy(5, "Gioco per Gatti", 15.99, $catCategory, "img/cat_toy.jpg", "Plastica", "Piccolo"),
 new Bed(6, "Cuccia per Gatti", 45.99, $catCategory, "img/cat_bed.jpg", "Piccola", "Peluche")
];