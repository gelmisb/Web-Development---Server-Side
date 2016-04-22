<?php
$title = 'Shopping';
require_once __DIR__ . '/../templates/header1.php';
require_once __DIR__ . '/../templates/header2.php';
?>
<nav>
	<ul>
		<li><a href="index.php?action=showHome" >Home</a></li>
		<li><a href="index.php?action=showRegister" >Register</a></li>
		<li><a href="index.php?action=showShop" >Merchandise</a></li>
		<li><a href="index.php?action=showClass" >Classes</a></li>
		<li><a href="index.php?action=showGallery" >Gallery</a></li>
		<li><a href="index.php?action=showContact">Contact Us</a></li>
		<li><a href="index.php?action=showSiteMap">SiteMap</a></li>
	</ul>
</nav>

<body>
<header>
	<img style="margin-left: auto;margin-right: auto" id="pic" src="/public/images/asdasd.jpg" alt="Cabal Online"  >
</header>
<form action="index.php?=addToCart" method="get">
	<style>
		table {
			border: solid #282828 5px;
			border-radius: 15px;
			background-color: #191919;
		}
	</style>
	<table cellpadding="30" cellspacing="10" align="center" >
		<tr>
			<th>Item</th> <th>Item code</th> <th>Price</th> <th>Add to cart</th>
		</tr>


		<?php
		foreach ($products as $product){
//---------------------------
			?>

			<tr>
				<td><img src="../public/images/merchandise/<?= $product->getImage() ?>" style="text-decoration: none; color: dodgerblue"></td>
				<td><?= $product->getName() ?></td>
				<td>€<?= $product->getPrice() ?></td>
				<td><a href="../public/index.php?action=addToCart&id=<?= $product->getId() ?>" style="text-decoration: none; color: dodgerblue">Add To Cart</a></td>

				<input type="hidden" name="action" value="addToCart">
			</tr>


			<?php
//---------------------------
		}
		?>



	</table>
	<a href="../public/index.php?action=showShoppingCart" style="margin-right: auto; margin-left: 650px; text-decoration: none; color: dodgerblue; font-size: larger">Check total</a>



</form>

<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>
	</body>
	</html>

