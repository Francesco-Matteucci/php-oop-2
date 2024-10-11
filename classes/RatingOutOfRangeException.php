<?php

class RatingOutOfRangeException extends Exception {
    public function __construct($message = "Il tuo vuoto è fuori dal range!", $code = 0, Exception $previous = null) {

        parent::__construct($message, $code, $previous);
    }
}