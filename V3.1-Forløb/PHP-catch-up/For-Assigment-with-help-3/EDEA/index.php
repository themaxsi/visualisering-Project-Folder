<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>EDEA skates</title>
</head>

<body>

    <?php 
        include "includes/topmenu.php"; 
        include "includes/sidemenu.php";
    ?>
 
    <div class="content">

        <header>
            <img src="img/edea-home-of-champions.jpg">
        </header>

        <main>
            <h1>Edea støvler - høj kvalitet til top præstationer!</h1>
            <section>
                <article>
                    <p>Kunstskøjteløbere har altid flyttet grænser, og de ønsker den nyeste teknologi til at hjælpe dem med dette. 
                    Edea's højt kvalificerede teknikere har fået feedback på, hvilke ønsker og krav skøjteløbere har til støvler. 
                    Dette, kombineret med den nyeste forskning, gør Edeas støvler både revolutionerende og af højeste kvalitet.</p>
                </article>
            </section>
            <section>
                <h2>Udvalgte produkter:</h2>
                <div class="products">
                    <article>
                        <img src="img/piano-edea-skates.jpg" alt="Piano Edea skate">
                        <h3>Edea Piano</h3>
                        <p>Antal stjerner: 6</p>
                        <p>Beskrivelse:</p>
                        <p>Kunstskøjteløbere forsøger altid at flytte grænserne, og med den nyeste teknologi er det 
                        nu blevet endnu lettere.</p>
                        <p>Vores dygtige teknikere har med feedback fra verdens bedste skøjteløbere og med brug af 
                        den allernyeste teknologi skabt en helt unik ny støvle, Piano.</p>
                        <p>Edea Piano er 100% håndlavet italiensk design. Vores første støvle, der giver ekstra stabilitet, 
                        kraft og bevægelse med det dobbelte antichok system og revolutionære design.</p>
                        <p>Stivhed: 95</p>
                        <p>Understøtter: triplespring quadspring</p>
                        <p>Pris: 4500,-</p>
                        <button>Køb nu!</button>
                    </article>
                    
                    <article>
                        <img src="img/ice-fly-edea-skates.jpg" alt="Edea Ice Fly skate">
                        <h3>Edea Ice Fly</h3>
                        <p>Antal stjerner: 5</p>
                        <p>Beskrivelse:</p>
                        <p>Ice Fly er den letteste kunstskøjtestøvle på markedet i et ultra moderne design. 
                        Støvlens fleksibilitet giver mulighed for ekstra ynde og elegance til enhver performance.</p>
                        <p>Med en øget hældning på forsiden af hælen, forkortes reaktionstiden, fordi foden allerede 
                        er i den korrekte position. Dette giver kunstskøjteløbere mere flydende bevægelser i indløbet 
                        og forberedelserne til spring.</p>
                        <p>Edea Ice-Fly er 100% håndlavet italiensk design. Den dobbelte sål giver ekstra 
                        stødabsorbering og hjælper til at passe på dine led.</p>
                        <p>Stivhed: 90</p>
                        <p>Understøtter: triplespring quadspring</p>
                        <p>Pris: 3400,-</p>
                        <button>Køb nu!</button>
                    </article>
                    
                    <article>
                        <img src="img/concerto-edea-skates.jpg" alt="Edea Concerto skate">
                        <h3>Edea Concerto</h3>
                        <p>Antal stjerner: 5</p>
                        <p>Beskrivelse:</p>
                        <p>Concerto er udviklet til skøjteløb på højt niveau. Edea har brugt sin erfaring og knowhow 
                        til at producere en støvle, der kombinerer moderne teknologi med det traditionelle udseende.</p>
                        <p>Concertos ekstra styrke betyder, at den ofte bruges af mandlige skøjteløbere eller af 
                        parløbere, hvor de høje spring kræver ekstra understøttelse og styrke i støvlen.</p>
                        <p>Edea Concerto er 100% håndlavet italiensk design. Den dobbelte sål giver ekstra 
                        stødabsorbering og hjælper til at passe på dine led.</p>
                        <p>Stivhed: 85</p>
                        <p>Understøtter: triplespring quadspring</p>
                        <p>Pris: 2675,-</p>
                        <button>Køb nu!</button>
                    </article>
                </div class="products">
            </section>
        </main>

        <?php include "includes/footer.php"; ?>

    </div>

</body>
</html>