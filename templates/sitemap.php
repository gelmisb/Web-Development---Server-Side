<?php

$title = 'Sitemap';
require_once __DIR__ . '/../templates/header1.php';
require_once __DIR__ . '/../templates/header2.php';

?>
<style>

		ol {
			text-align: center;
		}

		ol li {
			display: block;	

		}

		ol li a {
			
			color: #ffffff;
		}

		ol li:hover {
			background-color: #000000;
			text-transform: uppercase;
		}

		h4 {
			text-align: center;
			color: white;
		}
		h4:hover {
			color: blue;
			text-transform: uppercase;
			background-color: #ffffff
		}

	</style>
	<script>
		function show(whichdiv)
		{
			document.getElementById(whichdiv).style.display='block'; 
		}

		function hide(whichdiv)
		{
			document.getElementById(whichdiv).style.display='none'; 
		}

		function toggle(whichdiv)
		{
			if (document.getElementById(whichdiv).style.display=='block')
				{
					document.getElementById(whichdiv).style.display='none';
				}

			else
				{
					document.getElementById(whichdiv).style.display='block';
				}
		}
	</script>
</head>

<body onLoad="hide('togglebox1');hide('togglebox2');hide('togglebox3');">

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

<hr>


<h4 onClick="toggle('togglebox1');"><b>Main sites</b></h4>
	<div id="togglebox1" style="display:block;">
		<ol >
			<li><a href="index.php?action=showHome">Home</a></li>
			<li><a href="index.php?action=showShop">Shop</a></li>
			<li><a href="index.php?action=showClass">Classes</a></li>
			<li><a href="index.php?action=showGallery">Gallery</a></li>
			<li><a href="index.php?action=showContact">Contact Us</a></li>
		</ol>
	</div>
<hr>


<h4 onClick="toggle('togglebox2');"><b>Sub-sites</b></h4>
	<div id="togglebox2" style="display:block;">
		<ol>
			<li><a href="index.php?action=showShop">Shop</a></li>
			<li><a href="index.php?action=showShop">Shop 1</a></li>
		</ol>
	</div>
<hr>


<h4 onClick="toggle('togglebox3');"><b>Useful links</b></h4>
	<div id="togglebox3" style="display:block;">
		<ol>
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Google 1+</a></li>
			<li><a href="#">Youtube</a></li>
		</ol>
	</div>
<hr>



<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>
</body>
</html>