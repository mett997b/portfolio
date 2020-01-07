<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style2.css" rel="stylesheet">
    <title>CSS</title>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">


</head>

<body>
    
<!--PHP include header og navigation-->
<?php
include 'header.html';
include 'nav.html';
?>
    <!--Brødtekst med billeder/illustrationer-->
    <section>
        <h1>Genetelt om CSS</h1>
        <p>
            CSS er en forkortelse af Cascading Style Sheets og er det programmeringssprog, der beskriver udseendet af en hjemmeside fx farver og placering. 
        </p>
        <p>
            Cascading Style Sheets stor følgende: 
            <br>- Styles – Der er angiver de regler der naviger, og refereres til i HTML.
            <br>- StylesSheets – en sammensætning af regler.
            <br>- Cascading – henviser til, hvornår reglerne gælder.
        </p>
        <p>
            CSS stylesheets er altid skrevet i læseretningen. Det vil sige, at man skal være opmærksom på at samle alt style inde under samme sæt af declarations ({}), på dansk kaldet tuborgklammer. Vælger man at vælge en tekst farve, men længere nede ændre den, vil den sidste nævnte gælde, og det vil ende i overflødigt kode. 
        </p>
        <p>
            CSS kan anvendes på tre forskellige metoder:
            <br>- Linline: Er når man skriver styling ind direkte i HTML koden og påvirker kun det enkle element. 
            <br>- Embedded: Er når man skriver at sin style i <head> sektionen.
            <br>- Separat stylesheet: Er når man separerer HTML og CSS, og har rå tekst i HTML og style i CSS.
        </p>
        <p>
            Separat stylesheet er en mest anvende metode, da det sikre en ensartethed mellem sine sider.
            <br>Med separat stylesheet, kan man fra flere forskellige HTML filer, linke til det samme CSS stylesheet. Og ønsker man at udskifte stilen, kan man bare lave et nyt CSS stylesheet, og linke dertil, uden at skulle det gamle.
        </p>
        <a id="kildelink" href="file:///C:/Users/mette/Downloads/intro%20til%20css%20(3).pdf">-Niels Østergaard, "intro til css.pdf"</a>

        <h2>Syntaks</h2>
        <p>
            Et CSS stylesheet, er grundlæggende opbygget af en eller fra properties og values, specificeret til valgte HTML elementer. Der tre forskellige måde, at ”fange” HTML elementer på, i et CSS stylesheet.
        </p>
        <p>
            - Element selector: Er når man i CSS skriver elementets tag navn, hvor påvirkninger gælder for alle med samme tag.
            <br>- ”class” selector: Er når man navngiver elementer noget specifikt i HTML. Med ”class” attributten, kan flere elementer godt have samme navn, hvis nødvendigt. I CSS vil man skrive et ”.” inden det angivet navn.
            <br>- ”id” selector: Er meget lig ”class”, men anvendes ”id” attributten, er elementet det eneste med det angivet navn. I CSS vil man er ”id” navne afgivet med et ”#” inden det unikke navn.
        </p>
        <img src="csssyntaks.png" alt="Billede af CSS suntaks eks.">
        <a id="kildelink" href="file:///C:/Users/mette/Downloads/intro%20til%20css%20(3).pdf">-Niels Østergaard, "intro til css.pdf"</a>
    </section>

<!--PHP include footer-->
<?php
include 'footer.html';
?>
</body>
</html>