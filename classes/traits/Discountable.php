<?php

trait Discountable {
    public function applyDiscount(float $price, float $discount): float {
        return $price * (1 - $discount);
    }
}