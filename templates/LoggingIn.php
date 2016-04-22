
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <style type="text/css" rel="stylesheet">
        @import "/public/css/main.css";
        @import "/public/css/nav.css";
        @import "/public/css/header.css";
        @import "/public/css/footer.css";
        @import "/public/css/img.css";
        @import "/public/css/forms.css";
        body{
            /*background-image: url("images/back.jpg");
            */
            background-color: #000000;
            background-attachment: fixed;
            background-size: 100%;
        }

        header {
            /*background-image: url("images/cabal_online_header.jpg");*/
            background-color: #989898;
            background-attachment: scroll;
            background-size: 100%;
            margin: 0;
        }
    </style>


    <!--//////////////////////////////////////////////////////////////
    //////////////////////////////JAVASCRIPT//////////////////////////-->

    <script type="text/javascript">

        var i, imgs, pic;

        function rotate()
        {
            pic.src = imgs[i] ;
            (i === (imgs.length -1) ) ? i=0 : i++ ;
            setTimeout( rotate, 3000 ); //each image will last for 3 seconds
        }

        //this function is for the slideshow


        function job()
        {
            pic = document.getElementById("pic");

            imgs = [ "images/cabal_online1.jpg",  "images/cabal_online3.jpg", "images/cabal_online4.jpg", "images/cabal_online5.png", "images/5.jpg",  "images/6.jpg" , "images/7.jpg"] ;

            var preload = new Array();
            for( i=0; i< imgs.length; i++ )
            {
                preload[ i ] = new Image();
                preload[ i ].src = imgs[ i ];
            }

            i=0;

            rotate();
        }

        onload=job;

    </script>


    <!--//////////////////////////JAVASCRIPT/////////////////////////////
    //////////////////////////////JAVASCRIPT//////////////////////////-->

</head>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="registering.php">Register</a></li>
        <li><a href="shop.html">Merchandise</a></li>
        <li><a href="classes.html">Classes</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="contact.html">Contact Us</a></li>
    </ul>
</nav>




        <form
            id="form1"
            method="GET"
            action="Login.php"
        >
            <h3>Please login</h3>
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
            <label id="button">
                <input type="submit" name="login" value="Login" >
            </label>
            <br>
            <hr>
        </form>
        <form
            id="form2"
            method="GET"
            action="/templates/Register.phper.php"
        >
            <h4>Don't have an account yet?</h4> <input type="submit" name="register" value="Register">
            <br>
            <br>


        </form>

<hr style="background-color: red;">



<footer>


    <a href="mailto:B00080902@student.itb.ie">Ask me a question!</a>
    <a href="sitemap.html">Sitemap</a>

    <a href="#"><img src="/public/images/fb.jpg" alt="facebook logo"></a>
    <a href="#"><img src="/public/images/twt.png" alt="twitter logo"></a>
    <a href="#"><img src="/public/images/youtube_logo.png" alt="youtube logo"></a>

    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
             src="http://jigsaw.w3.org/css-validator/images/vcss"
             alt="Valid CSS!" />
    </a>
    <div>
        <b>Page developed by B00080902™</b>
    </div>


</footer>



</body>



</html>


