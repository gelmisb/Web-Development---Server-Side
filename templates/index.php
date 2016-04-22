<?php

session_set_cookie_params(3600,"/");

$isLoggedIn = false;


$username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);

$title = 'Cabal Online Fan Page';
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


<?php
if(isset($_GET['login']))

{
    ?>
    <style>
        .link {
            visibility: hidden;
        }
    </style>

    <label   style="font-size: larger; text-decoration: none; color: floralwhite; margin-left: 1200px; margin-right: auto; ">
        Welcome <?=  $username ?> !
        <a href="index.php?action=showHome" style=" text-decoration: underline; color: dodgerblue; margin-left: 1200px; margin-right: auto; ">Logout</a>
    </label>
    <?php
}
?>
<!--Couldn't figure it out without the guide for the pop up window-->
<!-- http://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3/ -->
<section class="link" >
    <a href="#openModal"  style="font-size: larger; text-decoration: none; color: floralwhite; margin-left: 1200px; margin-right: auto; ">Login</a>
</section>

<h1>Cabal Online</h1>
<h2>Fan Page</h2>

<div class="columns">

    <section style="margin: auto" class="para">
        <p>
            Log in during the event period to experience an epic invasion! Visit Bloody Ice and Green Despair to face some of the fiercest and most intimidating CABAL Online monsters!
<br>
<br>
            Defend Nevareth from the Monster Invasion! With hard work comes great reward--just take a look at the drop lists below!
        </p>
        <br>
        <br>

<!--********************************Short sitemap***********************************-->
    <p>Check these quick links</p>
    <ul style="list-style-type: none;">
        <li>Your <a href="../templates/UserChar.php" style=" text-decoration: underline; color: deepskyblue;">personal info</a> is here </li>
        <li>View <a href="../templates/classes.php" style=" text-decoration: underline; color: deepskyblue;">different types of classes</a></li>
        <li>Know a huge fan? <a href="index.php?action=showShop" style=" text-decoration: underline; color: deepskyblue;">Buy</a> a gift for your friend! </li>
        <li>This is a <a href="../templates/sitemap.php" style=" text-decoration: underline; color: deepskyblue;">sitemap</a> so you would know where everything is</li>
    </ul>
<!--********************************Short sitemap***********************************-->
    </section>
</div>
    <section>

<!--****************************************Login form**************************************-->

        <div id="openModal" class="modalDialog">
<!--****************************************LOGIN FORM CSS begins**********************************-->
            <style>
                .modalDialog h2 {
                    color: #191919;
                }
                .modalDialog {
                    color: #191919;
                    position: fixed;
                    font-family: Arial, Helvetica, sans-serif;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    background: rgba(0,0,0,0.8);
                    z-index: 99999;
                    opacity:0;
                    -webkit-transition: opacity 400ms ease-in;
                    -moz-transition: opacity 400ms ease-in;
                    transition: opacity 400ms ease-in;
                    pointer-events: none;
                }
                .modalDialog:target {
                    opacity:1;
                    pointer-events: auto;
                }

                .modalDialog > div {
                    width: 400px;
                    position: relative;
                    margin: 10% auto;
                    padding: 5px 20px 13px 20px;
                    border-radius: 10px;
                    background: #fff;
                    background: -moz-linear-gradient(#fff, #999);
                    background: -webkit-linear-gradient(#fff, #999);
                    background: -o-linear-gradient(#fff, #999);
                }
                .close {
                    background: #606061;
                    color: #FFFFFF;
                    line-height: 25px;
                    position: absolute;
                    right: -12px;
                    text-align: center;
                    top: -10px;
                    width: 24px;
                    text-decoration: none;
                    font-weight: bold;
                    -webkit-border-radius: 12px;
                    -moz-border-radius: 12px;
                    border-radius: 12px;
                    -moz-box-shadow: 1px 1px 3px #000;
                    -webkit-box-shadow: 1px 1px 3px #000;
                    box-shadow: 1px 1px 3px #000;
                }

                .close:hover { background: darkred; }

            </style>
<!--****************************************LOGIN FORM CSS  ends**********************************-->

            <div>
                <a href="#close" title="Close" class="close">X</a>
                <h2>Please login</h2>
                <form
                    id="form1"
                    method="GET"
                    action="../public/index.php?action=processLoginAction"
                >
                    <label>
                        Username <input type="text" name="username" value="">
                    </label>
                    <br>
                    <br>
                    <label>
                        Password <input type="password" name="password" value="">
                    </label>
                    <br>
                    <br>
                    <input type="hidden" name="action" value="usernameCheck">
                    <label>
                        <input type="submit" name="login" value="Login" >
                        <?php $isLoggedIn = true ?>
                    </label>
                    <br>
                </form>

                <form
                    id="form2"
                    method="GET"
                    action="../public/index.php?action=showRegister"
                >
                    <input type="hidden" name="action" value="showRegister">
                    <h4>Don't have an account yet?</h4>
                    <input type="submit" name="register" value="Register" >

                    <br>
                    <br>
                </form>
            </div>
        </div>
    </section>




<!--****************************************Login form**************************************-->


<section class="imag">

    <img id="pic" src="/public/images/sid.jpg" alt="Cabal Online"  >

</section>


<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>

</body>



</html>



