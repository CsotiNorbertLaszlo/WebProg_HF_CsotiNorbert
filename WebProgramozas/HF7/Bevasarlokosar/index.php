<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Termékek</title>
</head>
<body>
<h1>Termékek</h1>

<div>
    <h3>Termék 1</h3>
    <p>Ár: $10</p>
    <form method="post" action="add_to_cart.php">
        <input type="hidden" name="product" value="Termék 1">
        <input type="hidden" name="price" value="10">
        <input type="submit" name="addToCart" value="Kosárba">
    </form>
</div>

<div>
    <h3>Termék 2</h3>
    <p>Ár: $15</p>
    <form method="post" action="add_to_cart.php">
        <input type="hidden" name="product" value="Termék 2">
        <input type="hidden" name="price" value="15">
        <input type="submit" name="addToCart" value="Kosárba">
    </form>
</div>

<div>
    <h3>Termék 3</h3>
    <p>Ár: $20</p>
    <form method="post" action="add_to_cart.php">
        <input type="hidden" name="product" value="Termék 3">
        <input type="hidden" name="price" value="20">
        <input type="submit" name="addToCart" value="Kosárba">
    </form>
</div>

<a href="cart.php">Kosár megtekintése</a>
</body>
</html>
