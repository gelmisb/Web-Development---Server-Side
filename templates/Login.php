<?php
namespace Itb;

$username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);

$title = 'Wrong loggon';
require_once __DIR__ . '/../src/RegisterController.php';
use Itb\RegisterController;
$registerController = new RegisterController();
require_once __DIR__ . '/../templates/header1.php';
require_once __DIR__ . '/../templates/header2.php';
require_once __DIR__ . '/../templates/javaScriptIndex.php';

?>

<!DOCTYPE>
<html>
<head>
    <meta http-equiv="refresh" content="5; url=index.php" />
    <title><?=$title?></title>
    <style type="text/css" rel="stylesheet">
        @import "../public/css/login.css";
    </style>
<!--Graphical counter to notify the user of the redirection time-->

            <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML)<=0) {
                    location.href = 'Login.php';
                }
                i.innerHTML = parseInt(i.innerHTML)-1;
            }
        setInterval(function(){ countdown(); },1000);
    </script>


</head>

<body>
<section id="this">
<h2>Hello <?= $username?>, </h2>

<p>
    Please check your <strong>username</strong> and <strong>password</strong> and try again.
</p>

<p><b>You will be redirected in <span id="counter">5</span> second(s).</b></p>
<link rel="canonical" href="../templates/index.php"/>


</section>

<hr style="background-color: red;">

<?=require_once __DIR__ . '/../templates/footer.php';?>

</body>
</html>


