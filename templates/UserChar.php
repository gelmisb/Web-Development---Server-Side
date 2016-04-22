<?php
/**Title for the page**/
$title = 'Personal information';

/**Getting the required materials**/
require_once __DIR__ . '/../templates/header1.php';
require_once __DIR__ . '/../templates/header2.php';


?>
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

<body>

<header>

    <h1><em>Cabal Online</em></h1>

    <h2>Adding another option</h2>

</header>

<div class="two_columns">

<section>
    <form
        class="class1"
        action="../public/index.php?=addNewProduct"
        method="GET">
        <style>
            .class1{
                background-color: #590000;
                opacity: 0.7;
                margin: 60px;
                border-radius: 15px;
            }
        </style>
        <h3>Add New Product</h3>

        <input type="hidden" name="action" value="addNewProduct">
        <fieldset>
            <table>
                <legend>Your character information</legend>

                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=""></td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" value=""></td>
                </tr>

                <tr>
                    <td>Image</td>
                    <td><input type="text" name="image" value=""></td>
                </tr>

                <br>

                <tr>
                    <td><input type="submit" style="margin: auto" value="Add New Product"></td>
                </tr>
            </table>
        </fieldset>
    </form>


        <form class="class">
            <style>
                .class{
                    background-color: #590000;
                    opacity: 0.7;

                    margin: 60px;
                    border-radius: 15px;
                }
            </style>



            <fieldset>
                <table>

                    <legend>Your character information</legend>

                    <tr>
                        <td>Main character name</td>
                        <td><input type="text" name="userChar" value=""></td>
                    </tr>

                    <tr>
                        <td><b>Level of your main</b></td>
                        <td><input type="text" name="level" value=""></td>
                    </tr>

                    <tr>
                        <td><b>Type of Character</b></td>
                        <td><input type="text" name="type" value=""></td>
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
            <source src="../CabalClasses/WA.mp4" type="video/mp4">
            <source src="../CabalClasses/WA.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>





    </section>


</div>
<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>

</body>
</html>



