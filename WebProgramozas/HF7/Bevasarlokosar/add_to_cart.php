<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['addToCart'])) {
    $product = $_POST['product'];
    $price = $_POST['price'];

    $item = [
        'product' => $product,
        'price' => $price
    ];

    $_SESSION['cart'][] = $item;

    header('Location: index.php');
    exit();
}
?>

