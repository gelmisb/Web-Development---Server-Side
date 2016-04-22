
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

        imgs = [ "images/cabal_online1.jpg",  "images/cabal_online3.jpg", "images/cabal_online4.jpg", "images/cabal_online5.png", "images/4.jpg",  "images/2.jpg"] ;

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