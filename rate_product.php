<?php
session_start();
require_once __DIR__ . '/classes/RatingOutOfRangeException.php';
require_once __DIR__ . '/db/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $rating = (int) $_POST['rating'];

    $ratingMessage = [];

    foreach ($products as $product) {
        if ($product->id == $productId) {
            try {
                $product->rateProduct($rating);
                $ratingMessage = [
                    'success' => true,
                    'message' => "Il tuo voto è stato registrato con successo!",
                    'product_id' => $product->id
                ];
            } catch (RatingOutOfRangeException $e) {
                $ratingMessage = [
                    'success' => false,
                    'message' => $e->getMessage(),
                    'product_id' => $product->id
                ];
            }
        }
    }

    $_SESSION['ratingMessage'] = $ratingMessage;

    header('Location: index.php');
    exit;
}