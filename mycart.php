<?php

require_once 'product.php';
require_once 'cart.php';

session_start();

$cart = new cart;
$productsInCart = $cart->getCart();

if(isset($_GET['id']))
{
    $id = strip_tags($_GET['id']);
    $cart->remove($id);
    header('Location: mycart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php if(count($productsInCart)<= 0): ?>
            Nenhum Produto no Carrinho
        <?php endif; ?>

        <li><a href="/"> Go to Home</a></li>
        <?php foreach($productsInCart as $product): ?>
            <li>
                <?php echo $product->getName() ?>
                <input type="text" value="<?php echo $product->getQuantity() ?>">
                Price: R$ <?php echo number_format($product->getPrice(), 2, ',', '.') ?>
                Subtotal: R$ <?php echo number_format($product->getPrice() * $product->getQuantity(), 2, ',', '.')?>
                <a href="?id=<?php echo $product->getId() ?>">remove</a>
            </li>
        <?php endforeach; ?>
        <li>Total: R$ <?php echo number_format($cart->getTotal(), 2, ',', '.'); ?>
    </ul>
</body>
</html>