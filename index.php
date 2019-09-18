<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheets/index.css">
</head>
<body>
<div id="wrapper">
<header>
    <div class="koptekst">
     <h1>Hallo Wereld</h1>
     <small>japan's greatest culture</small>
    </div>
    <img class="rond" src="img/japan.jpg.jpg" alt="japan">
</header>

<nav>
    <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">cars</a></li>
        <li><a href="#">forum</a></li>
        <li><a href="#">help?</a></li>
    </ul>
</nav>

<div id="image_gallery">
    <img class="mySlides" src="img/136944.jpg" alt="plaatje" style="width:100%">
    <img class="mySlides" src="img/259077.jpg" alt="plaatje" style="width:100%">
    <img class="mySlides" src="img/auto.jpg" alt="plaatje" style="width:100%">
    <img class="mySlides" src="img/Bqn1GkX.jpg" alt="plaatje" style="width:100%">
    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>




</div>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>
</body>
</html>
