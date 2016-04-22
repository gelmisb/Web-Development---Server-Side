<?php

$title = 'Classes';
require_once __DIR__ . '/../templates/header1.php';
require_once __DIR__ . '/../templates/header2.php';

?>
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


<header>

	<h1><em>Cabal Online</em></h1>

	<h2>Force Shielder</h2>

</header>
	<nav>
		<ul>
			<li><a href="classes.php" >Warrior</a></li>
			<li><a href="wizard.php" >Wizard</a></li>
			<li><a href="blader.php" >Blader</a></li>
			<li><a href="fb.php" >Force Blader</a></li>
			<li><a href="fa.php" >Force Archer</a></li>
			<li><a href="fs.php">Force Shielder</a></li>
			<li><a href="gl.php">Gladiator</a></li>
		</ul>
	</nav>
	<div class="two_columns">

<section>
	<form class="class">
		<style>
			.class{
				background-color: #590000;
				opacity: 0.7;
				margin-top: 20px;
				margin-bottom: 10px;
			}
		</style>
	<h3>These are the classes currently in Cabal Online</h3>
		<fieldset >
			<table >
				<legend>Force Shielder</legend>
				<tr><td><ul><li>A heavy type char</li></ul></td></tr>
				<tr><td><ul><li>Deals a lot of damage</li></ul></td></tr>
				<tr><td><ul><li>Has a high def rate</li></ul></td></tr>
			</table>
		</fieldset>



		<fieldset>
			<table>

				 <legend>Images</legend>

				<tr>
					<td><img src="../public/images/classes/warrior1.jpg"></td>
				</tr>

				<tr>
					<td><img src="../public/images/classes/warrior2.jpg"></td>
				</tr>

				<tr>
					<td><img src="../public/images/classes/warrior3.png"></td>
				</tr>

			</table>
		</fieldset>

	</form>
	
	</section>


<!--MAKE AN OPTION FOR A USER TO CHOOSE THE TIME THEY WANT-->
<!-- ...done... -->

<section>
<h3 align="center" style="text-decoration: underline;">A short video about a warrior</h3>

	<video id="myVideo" width="640" height="420" controls>
	  <source src="../CabalClasses/F.mp4" type="video/mp4">
	  <source src="../CabalClasses/WA.ogg" type="video/ogg">
	  Your browser does not support the video tag.
	  </video>
<p class="main_p">
<br>
	One
<br>
<br>
	Playing Lessons - Play 9 or 18 Holes with Kid Kindey in <em>Aureus Pila</em> Golf Club and get a <b>complete</b> assessment of your game
<br>
<br>
	Group Lessons - Avail of any of our group lessons for both long and short game
	<br>

	</p>
	

	

</section>


</div>
	<hr style="background-color: red;">

	<?=require_once __DIR__ . '/../templates/footer.php';?>

</body>
</html>


