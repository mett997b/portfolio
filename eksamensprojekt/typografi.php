<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style2.css" rel="stylesheet">
    <title>Typografi</title>
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
        <h1>Typografi</h1>
        <p>
            Typografi er en meget vigtig del af den moderne verden, da vi meget tekst orienteret og med den forkerte skrifttype, kan der nemt ske fejl kommunikation.
            Skrifttyper kan inddeles i tre kategorier serif, sans serif og andre.
        </p>
        <a id="kildelink" href="#">-Interfacedesign side 161</a>

            <h2>Serif</h2>
            <p>
                Serif er de skrifttyper, der forbindes med den klassiske tekst, og er udsmykket med små vandrette fødder, kaldet seriffer. 
                <br>Den slagt skrifttype er typisk brugt i forbindelse med længere teksttunge dokumenter som, bøger og rapporter. 
                <br>Når vi læser lange tekster, læser vi ikke bogstav for bogstav, men derimod formen, bogstaverne skaber i hvert ord. 
                <br>Serifferne på bogstaverne gør det nemmere at holde styr på, hvor man er på siden, da den flade bund giver en usynlig hjælpelinje.
            </p>
            <img src="serif.JPG" alt="Serif skrifttyper">
            <a id="kildelink" href="#">-Interfacedesign side 162</a>

            <h2>Sans serif</h2>
            <p>
                Sans er et fransk for ’uden’. Det vil sige, at sans serif skrifttyper ganske enkelt er uden fødder/seriffer. 
                <br>Den slags skrifttype er typisk brugt i korte tekster fx motorvejskilte, man skal kunne læse hurtigt. 
                <br>De er derfor ikke god til lange tekster, da de ikke danner den usynlige hjælpelinje.
            </p>
            <img src="sansserif.JPG" alt="Sans serif skrifttyper">
            <a id="kildelink" href="#">-Interfacedesign side 162</a>

            <h2>Andre skrifttyper</h2>
            <p>
                De fleste skrifttyper ligger inde under de to foregående kategorier, men der er nogle der alligevel ligger lidt for sig selv, og kommer i en ’andre’ kategori. 
                <br>Monospace-skrifter er en af dem, og er hvor hvert bogstav har lige meget plads. 
                <br>Skrifttyper som denne er gode, hvis hvert bogstav skal stå alene, frem for ordet som helhed fx HTML-kode. 
            </p>
            <p>
                Et andet eksempel på skrifttyper der ligger i andet kategorien er, script-skrifttyper, der er håndskrevne tekster.
            </p>
            <img src="andre.JPG" alt="Andre skrifttyper">   
            <a id="kildelink" href="#">-Interfacedesign side 163</a> 
            
            <h2>Fontanatomi</h2>
            <p>
                Typografi er ikke kun skrifttyper i sig. Når man skal finde den rigtige skrifttype, er det vigtigt, at man tager følgende begreber man skal være opmærksom på:
            </p>
            <p>
                - Minuskler – Der beskriver de ’små’ bogstaver.
                <br>- Majuskler – Der beskriver de ’store’ bogstaver.
                <br>- X-height – Der beskriver højden på minuskler, målt fra hjælpelinjen til toppen af bogstavet.
                <br>- Leading – Der beskriver afstanden mellem to hjælpelinjer.
                <br>- Kerning – Der beskriver afstanden mellem hvert bogstav, hvor man kun kan ændre afstand bogstav for bogstav.
                <br>- Tracking – Der beskriver også afstanden mellem bogstaver, men med denne kan man ændre afstanden i dele, eller hele ord.
            </p>
            <a id="kildelink" href="#">-Carsten Bogner, "typografi.pdf"</a>

    </section>
<!--PHP include footer-->
<?php
include 'footer.html';
?>

</body>
</html>