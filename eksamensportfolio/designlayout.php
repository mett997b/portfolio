<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style2.css" rel="stylesheet">
    <title>Design Layout</title>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>

<body>
<!--PHP include header og navigation-->
<?php
include 'header.html';
include 'nav.html';
?>
    <!--Brødtekst-->
    <section>
        <h1>Design Layout</h1>
        <p>
            Enheder har forskellige skærmstørrelser, og dermed og forskellige opløsninger. 
            <br>Det er derfor vigtigt, at man som website programmør kan give brugeren den optimale oplevelse, uanset hvilken enhed der anvendes. 
        </p>
        <a id="kildelink" href="file:///C:/Users/mette/Downloads/responsive_i_praksis%20(2).pdf">-Niels Østergaard, "responsive i praksis.pdf"</a>

            <h2>Statisk layout</h2>
            <p>
                Statisk layout består i faste mål (fixed width). Med statisk layout vil indholdet på hjemmesiden ikke ændres i forskellige skærmstørrelser. 
            </p>
            <p>
                Fordelen er, at man kan have nogle bestemte elementer til at side fast siden. Fx hvis man gerne vil have navigationsbaren til at følge med hele vejen ned. 
            </p>
            <p>
                Ulempen er, at man ikke kan bruge den Responsive, som hel side, da den kun passer til en bestemt skæm størrelse
            </p>
            <a id="kildelink" href="file:///C:/Users/mette/Downloads/responsive_i_praksis%20(2).pdf">-Niels Østergaard, "responsive i praksis.pdf"</a>

            <h2>Flydende layout</h2>
            <p>
                Flydende (fluid) layout består i elementer der tilpasser sig efter bredden af skærm man anvender. 
                <br>Elementerne bredde og højde bliver angivet i procenter, der automatisk tilpasser sig efter størrelse af enhed.
            </p>
            <p>
                Fordelene er, at pladsen på siden bliver udnyttet bedst og giver oftest en god brugeroplevelse.
            </p>
            <p>
                Ulempen er, at ikke alt indhold fungerer når det bliver for smalt.
            </p>
            <a id="kildelink" href="file:///C:/Users/mette/Downloads/responsive_i_praksis%20(2).pdf">-Niels Østergaard, "responsive i praksis.pdf"</a>

            <h2>Responsiv layout</h2>
            <p>
                Responsiv layout er den mest normale at bruge, og består af fluid layout, men med andre regler. Ved responsiv layout bruger vi noget der hedder @mediaqueries. @mediaqueries giver os mulighed for at anvende det samme HTML og CSS dokumenter, til alle enheder. 
                <br>Man laver som regel altid responsiv layout i mobile first. Det vil sige, at man starter sit design i de små, og arbejder sig op ad. 
                <br>Man vil typisk have tre wireframes, en for mobil, tablet og desktop, men man kan sagtens have flere.
            </p>
            <p>
                Ulempen er, at det kræver lidt planlægning, men i enden giver det, det bedste resultat.
            </p>
            <a id="kildelink" href="file:///C:/Users/mette/Downloads/responsive_i_praksis%20(2).pdf">-Niels Østergaard, "responsive i praksis.pdf"</a>

            <h2>Adaptiv layout</h2>
            <p>
                Adaptiv layout er en blanding mellem statisk og responsiv. Forstået på den måde, at den består af et statisk layout, som er styret af @mediaqueries. Bruges typisk, hvis man har et statisk layout, men gerne vil gøre responsiv, uden at omskrive det om.
            </p>
            <p>
                Ulemperne er, at man typisk vil have for meget eller for lidt plads, hvis ikke end enhed rammer de specifikke brakpoints. Der bliver typisk arbejdet mobile last, ved dette layout, og derfor oftest er nødsaget til at fravælge elementer, der ikke kan fungere på den lille skærm.
            </p>
            <a id="kildelink" href="file:///C:/Users/mette/Downloads/responsive_i_praksis%20(2).pdf">-Niels Østergaard, "responsive i praksis.pdf"</a>
    </section>

<!--PHP include footer-->
<?php
include 'footer.html';
?>
</body>
</html>