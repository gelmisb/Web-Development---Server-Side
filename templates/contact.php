<?php
$username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);

$title = 'Contact Us';
require_once __DIR__ . '/../templates/header1.php';
require_once __DIR__ . '/../templates/header2.php';
require_once __DIR__ . '/../templates/javaScriptIndex.php';

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
	<fieldset class="contact">
		<table cellpadding="20">
			<legend><b>Fill in the form</b></legend>
			<tr>
				<th>First name: </th> <td><input type="text" maxlength="15" required id="name"></td>
			</tr>
			
			<tr>
				<th>Surname: </th>	<td><input type="text" maxlength="20" id="surname"></td>
			</tr>

			<tr>
				<th>Email: </th> <td><input type="email" name="useremail" title = "Email (Format: john@ggc.ie)" required></td>
			</tr>

			<tr>
				<th>Rate our club from 1 - 100: </th> <td><input type="range" id="myRange" value="0"></td>
			</tr>
			
			<tr>
				<th>Comments: </th> <td><textarea cols="40" rows="5"></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td>
					<button onclick="myFunction();">Submit</button>
				</td>
			</tr>
		</table>
	</fieldset>
</form>
<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>

</body>
</html>