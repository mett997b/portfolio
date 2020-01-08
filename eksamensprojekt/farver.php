<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style2.css" rel="stylesheet">
    <title>Farver</title>
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

<!--Brødtekst med billeder/illustrationer-->
<section>
    <h1>Farver</h1>
    <p>
        Farver er noget vi ser over alt vi er, de påvirker vores hverdag følelses- og sansemæssigt, både positivt og negativt. 
    </p>
    <p>
        ”Farver tilføjer ikke bare en behagelig kvalitet til designet – de forstærker det.”
        <br>-Pierre Bonnard
    </p>
    <p>
        Farver bliver oftest beskrevet ud fra tre fag begreber, som kulør, intensitet og lyshed.
    </p>
    <p>
        - Kulør definerer hvilken farve der bliver snakket om
        <br>- Intensiteten definerer hvor intenst, eller hvor ’ren’ en farve er, ud fra hvor meget sort, hvid eller grå der fremkommer i farven. Man siger, at en farve er ’ren,’ hvis den indeholder en lille mængde af grå, og omvendt ’uren’ hvis dem indeholder meget grå.
        <br>- Lyshed definerer i hvilken grad den er mørkere, eller lysere end en bestemt farve. Lysheden påvirkes afhænger af, om farven er blandet med hvid eller sort.
    </p>
    <a id="kildelink" href="#">-Interfacedesign bog side 173 og 174</a>

        <h2>Farvesymbolik</h2>
        <p>
            Alle farver kan på den en eller den anden måde, skabe en stemning, men nogle farve har fået en bestemt værdi eller betydning. Hvilke værdiger og betydning farver har, er påvirket ved det følelsesmæssige, fysiske og det kulturelle aspekt. 
            <br> Det kan være svært at sige den præcise betydning, de følgende eksempler er derfor det, de fleste associere med de forskellige farver.
        </p>
            <h3>Blå</h3>
            <p>
                Blå er den farver der bliver brugt allermest, fordi den opfattes troværdigt, skaber ro eller loyalitet, afhængig af hvilken nuance den fremtræder i. 
                <br>Blå er også typisk den farve de fleste vil sige, der var deres ’yndlingsfarve’.
            </p>
            <h3>Rød</h3>
            <p>
                Den røde farve er, til forskel med den blå, en meget dramatisk farve, der associeres med stærke følelser som aggression, passion og kærlighed. 
                <br>Rød er en farve er tit opæggende og bliver eksempletvis brugt til stopskilte.
            </p>
            <h3>Gul</h3>
            <p>
                Gul er en af de farver der har mange forskellige betydninger afhæng af hvem og hvor i verden du er. Gul giver glæde, optimisme og håb. 
                <br>Bagsiden af denne farve er, at den også bliver sammenlignet med jalousi og svigt. I nogle lande bliver gul også brugt i forbindelse med nedsat pris.
            </p>
            <a id="kildelink" href="#">-Interfacedesign bog side 181 og 182</a>

        <h2>Farvehjulet</h2>
        <p>
            Farvehjulet blev defineret i starten af 1900-tallet af Johannes Itten. Farvehjulet består af de tre primærfarver rød, gul og blå inderst, dernæst de sekundære farver grøn, lilla og orange, og yderst de tertiærfarver, der er en blanding af de primær- og sekunderfarver. 
            <br>Ud over det, er farvehjulet opdelt i to lige store dele, hvor på den blålige side, kaldes for de kolde farver, mens de rødlige kaldes varme.
        </p>
        <img src="farvehjulet.JPG" alt="Farvehjulet">
            <h3>Farveharmoni</h3>
            <p>
                Når det kommer til at skulle udvælge farver, kan man bruge fire forskellige metoder, monokrom, komplementær, analog eller triadiske farver.
            </p>
            <img src="farveharmoni.JPG" alt="Farveharmoni">
                <h4>Monokrom</h4>
                <p>
                    Mono betyder i videnskabens verden en. Det vil derfor sige, at monokromatiske farver står alene, og er den hvilken som helst farve der ønskes.
                </p>
                <h4>Komplementær</h4>
                <p>
                    Komplementær farver er de der ligger lige over for hinanden i farvehjulet, og derfor også giver den størst mulige farvekontrast. Ved komplementær farver indgår der en kold og en varm farve.
                </p>
                <a id="kildelink" href="#">-Interfacedesign bog side 182 og 184</a>
            
            <h3>Farvekoder</h3>
            <p>
                Når vi taler om navne på farver, kan det efterhånden være svært at finde ud af hvad hedder alle sammen. 
                <br>For at kunne holde styr på alle farverne, bruger man typisk RGB- eller HEX-koder.
            </p>
            <p>
                En skærm er opbygget af pixels, og hver pixel består af tre lamper- en rød, en grøn og en blå, når lysstyrken af de tre farvelamper varieres, gengives millioner af farver. 
            </p>
            <p>
                RGB- farvekode er defineret efter intensiteten mellem 0 og 255. Når lampen er slukket er intensiteten lig nul, hvorimod når lampen er på fuld styrke er intensiteten lig 255. 
            </p>
            <img src="rgb.JPG" alt="RGB-farvekode">
            <p>
                HEX- koder er som RGB også defineret ud fra rød grøn og blå, men her bruges forkortelser i form af seks tegn. 
                <br>HEX-koder går fra 0-9 men bruger også fra a-f af alfabetet. Den laveste værdi er derfor 00 og den største er ff.
            </p>
            <img src="hex.JPG" alt="HEX-farvekode">
            <a id="kildelink" href="#">-Interfacedesign bog side 178-180</a>
</section>

<!--PHP include footer-->
<?php
include 'footer.html';
?>

</body>
</html>