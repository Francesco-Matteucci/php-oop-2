<?php
session_start();

$isLoggedIn = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'];

echo json_encode(['isLoggedIn' => $isLoggedIn]);