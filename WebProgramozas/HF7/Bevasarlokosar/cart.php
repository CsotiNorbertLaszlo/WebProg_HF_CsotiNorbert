<?php
if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    unset($_COOKIE['cart'][$index]);
    setcookie('cart[' . $index . ']', '', time() - 3600, '/');
    header('Location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kosár</title>
</head>
<body>
<h1>Kosár</h1>

<a href="index.php">Vissza a termékekhez</a>

<?php if (!empty($_COOKIE['cart'])) : ?>
    <h2>Beletett termékek:</h2>
    <ul>
        <?php foreach ($_COOKIE['cart'] as $index => $item) : ?>
            <?php $item = json_decode($item, true); ?>
            <li>
                <?php echo $item['product']; ?> - <?php echo $item['price']; ?>
                <a href="cart.php?remove=<?php echo $index; ?>">Eltávolítás</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Összár:</h2>
    <?php
    $total = 0;
    foreach ($_COOKIE['cart'] as $item) {
        $item = json_decode($item, true);
        $total += (int)$item['price'];
    }
    echo '$' . $total;
    ?>
<?php else : ?>
    <p>A kosár üres</p>
<?php endif; ?>
</body>
</html>
