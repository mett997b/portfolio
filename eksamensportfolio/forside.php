<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Læringsportfolio</title>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
</head>

<body>
<!--PHP include header og navigation-->
<?php
include 'header.html';
include 'nav.html';
?>

    <!--Forside tekst-->
    <section id="forside"> 
        <p>
            Jeg er Mette Langvang, 21 år og studerende på multimediedesinger uddannelsen i Skive. 
            <br>I den forbindelse har jeg lavede denne hjemmeside, der har til formål at samle al min viden fra 1. semester. </br>
        </p>
        <p> 
            Da dette er forsiden, har jeg valgt at bruge den på, at vise nogle billede fra vores juletur til Tyskland, der kan få den glade stemning frem, inden de mange siders information der ligger forude. 😊
        </p>
    </section>

    <!--Billedeslider med knapper-->
   <section id="bknapper">
        <a href="#billede1">1</a>
        <a href="#billede2">2</a>
        <a href="#billede3">3</a>
        <a href="#billede4">4</a>
        <a href="#billede5">5</a>
        <a href="#billede6">6</a>
        <a href="#billede7">7</a>
        <a href="#billede8">8</a>
        <a href="#billede9">9</a>
        <a href="#billede10">10</a>
        <a href="#billede11">11</a>
        <a href="#billede12">12</a>
    </section>

    <section class="slider">
 
        <div class="slide" id="billede1">
            <img src="tt6.jpg">
        </div>

        <div class="slide" id="billede2">
            <img src="tt7.jpg">
        </div>

        <div class="slide" id="billede3">
            <img src="tt8.jpg">
        </div>

        <div class="slide" id="billede4">
            <img src="tt9.jpg">
        </div>

        <div class="slide" id="billede5">
            <img src="tt5.jpg">
        </div>

        <div class="slide" id="billede6">
            <img src="tt1.jpg">
        </div>

        <div class="slide" id="billede7">
            <img src="tt2.jpg">
        </div>

        <div class="slide" id="billede8">
            <img src="tt3.jpg">
        </div>

        <div class="slide" id="billede9">
            <img src="tt4.jpg">
        </div>

        <div class="slide" id="billede10">
            <img src="tt10.jpg">
        </div>

        <div class="slide" id="billede11">
            <img src="tt12.jpg">
        </div>

        <div class="slide" id="billede12">
            <img src="tt11.jpg">
        </div>
    </section> 

<!--PHP include footer-->
<?php
include 'footer.html';
?>
</body>
</html>