<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style2.css" rel="stylesheet">
    <title>HTML og SEO</title>
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
    <h1>Generelt om HTML</h1>
    <p>
        HTML er en forkortelse af Hyper Text Markup Languange, og er et programmeringssprog der ligger bag en hver hjemmeside. 
    </p>
    <img src="htmlopbygning.png" alt="HTML opbygning">
    <p>
        Ovenfor ses et billede af opbygningen, af et HTML dokument. Det inde i den hvide boks, er hvad der bliver vist på en hjemmeside, med undtagelse af titlen, der ligger navn til hjemmeside fanen.
    </p>
    <p>
        HTML er bygget op af HTML elementer, der samlet bestemmer hvad indhold der fremstår på en hjemmeside. 
        <br>Disse tags er enten forkortelser, eller kodeord, der danner ramme for elementer eller tekst. HTML er derfor i grove træk, tekst og billeder uden styling. 
    </p>
    <a id="kildelink" href="https://melfarwebdesign.dk/hvad-er-html/ ">-melfarwebdesign.dk</a>

        <h2>Syntaks</h2>
        <p>
            Elementerne i et HTML dokument er alle opbygget af et matchende sæt af start og slut tags. 
            <br>Begge tags er kendetegnet ved, at de omkranses af et mindre end og større end tegn < >, på engelsk kaldet brackets, med den forskel, at et slut tag altid ser ud således </ >.  
        </p>
        <img src="htmlsyntaks.png" alt="HTML syntaks element">
        <p>
            Som ses på billedet oven over er, starter HTML elementet med en start tag der indeholder en attribut, der indikere elementernes egenskaber som fx id og class. 
            <br>Imellem de to tags, er det selvvalgt tekstindhold, der i en paragraph typisk vil være sidens brødtekst.  
        </p>
        <a id="kildelink" href="https://developer.mozilla.org/en-US/docs/Glossary/HTML ">-mozilla.org</a>

        <h2>Semantiske tags</h2>
        <p>
            Der findes en række HTML tags, der har den egenskab, at de hver især fortæller noget om indholdet. 
            <br>Hvilket computer vil forstå som vigtige nøgleord, der har betydning for hvor langt oppe på listen, en side vil være (SEO). 
            <br>Semantik bliver ikke kun brugt til SEO, men også til egent og andre overblik. Bruges der ikke semantiske tags, kan HTML koden hurtig blive meget uoverskueligt, og er der lavet fejl, kan den være svær at finde, hvis hele dokumentet er bygget op af ikke-semantiske tags som < div > er.
        </p>
        <p>
            Et tydeligt eksempel på et semantisk tag er, < h1 >, dette tag vil uden styling fremstå, som den tekst med den største skriftstørrelse, for at få det til at ligne en overskrift 1 (Header 1).
        </p>
        <a id="kildelink" href="file:///C:/Users/mette/Downloads/Intro%20til%20HTML.pdf">-Niels Østergaard, "intro til html.pdf"</a>

        <h2>SEO</h2>
        <p>
            SEO er en forkortelse af Search Engine Optimization er en proces, der gør det muligt at få en hjemmeside til at blive synlige i søgeresultater, og optimere søge plaseringen. 
            <br>Måden det bliver gjort på er, at søgemaskiner ’kravler’ gennem hjemmesiders index. 
        </p>
        <p>
            SEO-metoden kan inddeles i tre kategorier:
            <br>-Teknik – Brug af semantisk HTML.
            <br>-Tekstforfatning – Brug variation af billeder og tekst, så den ’kravlende’ søgemaskine forstår formålet med emnet.
            <br>-Popularitet – Jo mere trafik og linkdeling af hjemmesiden, desto højere vil den ligge på søge resultatet.
        </p>
        <a id="kildelink" href="https://developer.mozilla.org/en-US/docs/Glossary/SEO ">-mozilla.org</a>

        <h2>Kodeskik</h2>
        <p>
            God kodestik er en væsentlig del, af det at skive kode. Uden god kodeskik bliver længere kode, overskueligt for en hver der kommer til at se den. 
        </p>
        <p>
            God kodeskik kan opnås ved indryk, kommentar og relevante id’er:
            <br>-Indryk laves med et tryk på ”tap” tabulatoren på tastaturet.
            <br>-Kommentar laves, ved at man i koden skriver ”<! --” hvorefter man skiver sin besked, og afsluttes med ”-->.”
            <br>-Relevante id’er laves, så man i CSS fx kan style en specifik section og dermed overså give bedre overblik der.
        </p>
        <p>
            Nogle foretrækker at bruge id’erne som start på afsnit, og kommentar som afslutning på afsnit.
        </p>
        <a id="kildelink" href="file:///C:/Users/mette/Downloads/Intro%20til%20HTML.pdf">-Niels Østergaard, "intro til html.pdf"</a>

    </section>
    
<!--PHP include footer-->
<?php
include 'footer.html';
?>

</body>
</html>