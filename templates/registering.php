<?php

require_once __DIR__ . '/../src/RegisterController.php';
use Itb\RegisterController;
$registerController = new RegisterController();
require_once __DIR__ . '/../public/index.php';

$title = 'Register';
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

<header>
    <img src="../public/images/cabalHeader.jpg" alt="cabal online" >
</header>
<body>

<!--created divs to make it more structured-->

<div class="column"><!-- used a lot of classes to distinguish the forms, where everything is and style better -->



    <section>
        <div >
            <form class="member"
                  action="index.php?=addUser"
                  method="get"
            >
                <fieldset>
                    <table cellpadding="5" cellspacing="3">
                        <legend>User information</legend>

                        <tr>
                            <td><label for = "name">Name: </label>	</td>
                            <td><input type="text" name = "name" maxlength="20" size="20"  placeholder="Enter your name" autofocus required ></td>
                            <td><label for = "name">Username: </label>	</td>
                            <td><input type="text" name = "username" maxlength="20" size="20"  placeholder="Enter your username" autofocus required ></td>
                        </tr>

                        <tr>
                            <td><label for = "tel" >Phone Number: </label></td>
                            <td><input type="tel" name = "tel"></td>
                            <td><label for = "email" >Email Address: </label></td>
                            <td><input type="email" name="email"></td>
                        </tr>


                        <tr>
                            <td>D.O.B</td>
                            <td><label><input type="date" name="date"></label></td>
                            <td>Male<label><input type="radio" name="shade" value="dark" checked value="Mr."></label></td>
                            <td>Female<label><input type="radio" name="shade" value="dark" checked value="Ms."></label></td>
                        </tr>

                        <tr>
                            <td><label for = "address" >Home Address: </label></td>
                            <td><input type="text" name="address" ></td>
                        </tr>

                        <tr>
                            <td>Password:* </td>
                            <td><input type="password" id = "password" maxlength="20" size="20"  name="password" required></td>
                            <td>Reenter password:* </td>
                            <td><input type="password" id = "secondPassword" maxlength="20" size="20" name="secondPassword" required></td>
                        </tr>


                    </table>

                </fieldset>




                <div class= "center	">
                    <?php

                    ?>
                    <input type="submit" value="Submit">
                   <input type="hidden" name="action" value="addUser">
                    <input type="reset" id="reset" value="Reset" >
                </div>

            </form>
        </div>

    </section>

</div>










<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>
</body>
</html>
