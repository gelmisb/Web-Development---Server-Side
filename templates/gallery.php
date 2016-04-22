<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gallery</title>
	<style>
		@import "../public/css/main.css";
		@import "../public/css/nav.css";
		@import "../public/css/header.css";
		@import "../public/css/footer.css";
		@import "../public/css/img.css";
		body {
			background-image: url("../public/images/gg.jpg");
			background-attachment: fixed;
			background-size: 100%;
		}

	</style>


</head>


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
<h1>Cabal Online</h1>
	<h2>Gallery</h2>
</header>

<fieldset>
	<table align="center" cellspacing="50">
		<legend>Main Pics</legend>
				


			<tr>
				<td><img src="../public/images/4.jpg" alt="course"></td>
				<td><img src="../public/images/7.jpg" alt="golden field"></td>
				<td><img src="../public/images/1.jpg" alt="typical aligirator"></td>
				<td><img src="../public/images/cabal_online1.jpg" alt="pitch"></td>
			</tr>
		
	</table>
</fieldset>
 </div>
<fieldset>
	<table align="center" cellspacing="50">
		<legend>The great elements</legend>
			<tr>
				<td><img src="../public/images/cabal_online2.jpg" alt="Sid Sidney"></td>
				<td><img src="../public/images/cabal_online3.jpg" alt="Kis Kidney"></td>
				<td><img src="../public/images/cabal_online4.jpg" alt="John Johnston"></td>
				<td><img src="../public/images/cabal_online5.png" alt="Goldie"></td>
			</tr>
		</table>
</fieldset>

<fieldset>
	<table align="center" cellspacing="50">
		<legend>Main clans with warrior</legend>
			<tr>
				<td><img src="../public/images/classes/warrior1.jpg" alt="Sid Sidney"></td>
				<td><img src="../public/images/classes/warrior2.jpg" alt="Kis Kidney"></td>
				<td><img src="../public/images/classes/warrior3.png" alt="John Johnston"></td>
				<td><img src="../public/images/classes/blader1.jpg" alt="Goldie"></td>
			</tr>
	</table>
</fieldset>

<fieldset>
	<table align="center" cellspacing="50">
		<legend>Main clans with bladers</legend>
		<tr>
			<td><img src="../public/images/classes/blader2.jpg" alt="Sid Sidney"></td>
			<td><img src="../public/images/classes/blader3.jpg" alt="Kis Kidney"></td>
			<td><img src="../public/images/classes/fb1.jpg" alt="John Johnston"></td>
			<td><img src="../public/images/classes/fb2.JPG" alt="Goldie"></td>
		</tr>
	</table>
</fieldset>

<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>

</body>
</html>