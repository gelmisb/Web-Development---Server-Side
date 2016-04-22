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
	<img src="public/images/gbal.jpg" alt="golden golf ball" >

	<h1><em>Aureus Pila</em> golf club</h1>

	<h2>Shopping</h2>
</header>

<form>
	<table cellpadding="5" cellspacing="0" align="center">
			
			<tr>
				<th>Item</th> <th>Item code</th> <th>Price</th> <th>No. of items</th> <th>Description</th> <th>Add to cart</th>
			</tr>

			<tr>
				<td><img src="public/images/golf_gove.jpg"></td>
				<td><b> GGC0003010 </b></td>
				<td>€5,000</td>
				<td><input type="number" id="qnt1" size="2" value=""></td>
				<td>Our <b>Gold Golf Club</b> <em>Special</em> golf gloves with a bit of golden surface.</td>
				<td>Add to cart <input type="checkbox"  onclick="addtocart()" value="GGC0003010" id="checkbox"></td>
			</tr>

			<tr>
				<td><img src="public/images/golf_glove2.jpg"></td>
				<td><b> GGC0003011 </b></td>
				<td>€1,000</td>
				<td><input type="number" id="qnt2" size="2" value=""></td>
				<td>Proffessional golf gloves for our advanced golf members</td>
				<td>Add to cart <input type="checkbox"  onclick="addtocart1()" value="GGC0003011" id="checkbox1"></td>
			</tr>

			<tr>
				<td><img src="public/images/golf_glove3.jpg"></td>
				<td><b> GGC0003012 </b></td>
				<td>€200</td>
				<td><input type="number" id="qnt3" size="2" value=""></td>
				<td>Our <b>Gold Golf Club</b> used golf gloves. </td>
				<td>Add to cart <input type="checkbox"  onclick="addtocart2()" value="GGC0003012" id="checkbox2"></td>
			</tr>
			<tr>
			<td></td><td></td><td>	<button onclick="calc();" align="center">Submit</button></td><td></td><td></td>
		</tr>
	</table>

	<div class="center">

		<a href="shop1.php">Previous Page</a>
				<a href="shop3.php">Next Page</a>
	</div>

</form>

<hr color="red">

	<footer>
	
		<a href="mailto:B00080902@student.itb.ie">Ask me a question!</a> 
		<a href="sitemap.php">Sitemap</a>

		<a href="#"><img src="../public/images/fb.jpg" alt="facebook logo"></a>
		<a href="#"><img src="../public/images/twt.png" alt="twitter logo"></a>
		<a href="#"><img src="../public/images/youtube_logo.png" alt="youtube logo"></a>
	
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
<section>
		<b>Page developed by B00080902™</b>
</section>
        </footer>

	</body>
	</html>

