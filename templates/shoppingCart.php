<?php
/**Title for the page**/
$title = 'Shopping cart';

/**Getting the required materials**/
require_once __DIR__ . '/../templates/header1.php';
require_once __DIR__ . '/../templates/header2.php';


?>
<html>
<body>
<nav>
    <ul>
        <li><a href="../public/index.php?action=showHome" >Home</a></li>
        <li><a href="../public/index.php?action=showRegister" >Register</a></li>
        <li><a href="../public/index.php?action=showShop" >Merchandise</a></li>
        <li><a href="../public/index.php?action=showClass" >Classes</a></li>
        <li><a href="../public/index.php?action=showGallery" >Gallery</a></li>
        <li><a href="../public/index.php?action=showContact">Contact Us</a></li>
        <li><a href="../public/index.php?action=showSiteMap">SiteMap</a></li>
    </ul>
</nav>
<h1>Cabal Online</h1>

<h2>Your personal Shopping cart!</h2>
<table style="border: solid #787878 2px; margin-left: auto;margin-right: auto">
    <tr>
        <td style="border: solid black 2px;">Id</td>
        <td style="border: solid black 2px;">Price</td>
        <td style="border: solid black 2px;">Name</td>
        <td style="border: solid black 2px;">Quantity</td>
        <td style="border: solid black 2px;">Subtotal</td>
        <td style="border: solid black 2px;">Remove</td>

    </tr>
    <?php
    $total = 0; // zero grand total before loop
    foreach($shoppingCart as $id=>$quantity):
    //----- use ID to get Product object ------
    $product = \Itb\Product::getOneById($id);
    $subTotal = $product->getPrice() * $quantity; // calc sub-total for current item
    $total += $subTotal; // add sub-total to grand total
    ?>
<tr>
    <td style="border: solid black 2px;"><?= $product->getId() ?></td>
    <td style="border: solid black 2px;">&euro; <?= $product->getPrice() ?></td>
    <td style="border: solid black 2px;"><?= $product->getName() ?></td>
    <td style="border: solid black 2px;"><?= $quantity ?></td>
    <td style="border: solid black 2px;"><?= $subTotal ?></td>
    <td style="border: solid black 2px;"><a href="index.php?action=removeFromCart&id=<?= $product->getId() ?>" style="text-decoration: none; color: dodgerblue">(remove from cart)</a></td>
</tr>
        <?php
    endforeach;
?>
    </table>
<h2>Total price is: €<?= $total ?></h2>
<a href="../public/index.php?action=showShop" style=" margin-left: 650px;margin-right: auto; color: deepskyblue; text-decoration: none; font-size: larger" >Go Back</a>



<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>
</body>
</html>