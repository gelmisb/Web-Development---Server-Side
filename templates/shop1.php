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


<form>
<table cellpadding="5" cellspacing="0" align="center">
	

		<tr>
			<th>Item</th> <th>Item code</th> <th>Price</th> <th>No. of items</th> <th>Description</th> <th>Add to cart</th>
		</tr>

		<tr>
			<td><img src="public/images/golf_clubs.jpg"></td>
			<td><b> GGC0002010 </b></td>
			<td>€2,000</td>
			<td><input type="number" id="qnt1" size="2" value=""></td>
			<td>Our <b>Gold Golf Club</b> <em>Special</em> golden clubs for proffessional players</td>
			<td>Add to cart <input type="checkbox"  onclick="addtocart()" value="GGC0002010" id="checkbox"></td>
		</tr>

		<tr>
			<td><img src="public/images/golf_clubs2.jpg"></td>
			<td><b> GGC0002011 </b></td>
			<td>€500</td>
			<td><input type="number" id="qnt2" size="2" value=""></td>
			<td>Simple golf clubs for advanced players.</td>
			<td>Add to cart <input type="checkbox"  onclick="addtocart1()" value="GGC0002011" id="checkbox1"></td>
		</tr>

		<tr>
			<td><img src="public/images/golf_clubs3.jpg"></td>
			<td><b> GGC0002012 </b></td>
			<td>€200</td>
			<td><input type="number" id="qnt3" size="2" value=""></td>
			<td>Our <b>Gold Golf Club</b> used golf clubs.</td>
			<td>Add to cart <input type="checkbox"  onclick="addtocart2()" value="GGC0002012" id="checkbox2"></td>
		</tr>
		
		<tr>
			<td></td><td></td><td>	<button onclick="calc();" align="center">Submit</button></td><td></td><td></td>
		</tr>
	</table>
	<div class="center">
		
		<a href="shop.php">Previous page</a>
		<a href="shop2.php">Next Page</a>
	</div>
</form>
<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>
</body>
	</html>

