<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    if(isset($_POST))
    {
        $_SESSION["Post-Data"] = $_POST;
    }
    
    $db = new MySQLi("localhost", "maxsi", "1234qwer", "edea_skates_db");
    
    if($db->connect_error)
    {
        die("Connection to database failed: ". $db->connection_error);
    }
    if ($db->error) 
    {
        echo $db->error;
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
        <main>
            <h1>EDEA shop</h1>
            <section>
                <div class="products">


                    <?php 
                        
                        $result12 = $db->query("SELECT * FROM products ORDER BY PID DESC");
                        while ($row = $result12->fetch_assoc()) 
                        {
                            if (isset($row["PPic"])) //checks if the variable has a value
                            {
                                if (strpos($row['PPic'], " "))  //if there is more then one
                                {
                                    $img = explode(" ", $row["PPic"])[0];
                                }
                                else //if there is 1 pic
                                {
                                    $img = $row['PPic'];
                                }
                            }
                            else // if there is no pic
                            {
                                $img = "imagecomingsoon.png";
                            }
                            


                            ?>
                            <article>
                                <img src="<?php echo 'img/'.$img ?>" alt="<?php echo $row['PName'] ?>">
                                <h3><?php echo $row['PName'] ?></h3>
                                <p>Antal stjerner: <?php echo $row['PStars'] ?></p>
                                <p>Beskrivelse:</p>
                                <p><?php echo $row['PDesc'] ?></p>
                                <p>Stivhed: <?php echo $row['PStiff'] ?></p>
                                <p>Understøtter: <?php echo $row['PSupp'] ?></p>
                                <p>Pris: <?php echo $row['PPrice'] ?></p>
                                <button>Køb nu!</button>
                            </article>


                    <?php 
                    }
                    ?> 



<!-- 
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
                        <img src="img/imagecomingsoon.png" alt="Edea Flamenco Ice skate">
                        <h3>Edea Flamenco Ice</h3>
                        <p>Antal stjerner: 6</p>
                        <p>Beskrivelse:</p>
                        <p>Flamenco Ice er fremstillet med henblik på den ynde og elegance, der kendetegner dansesporten.</p>
                        <p>Ved hjælp af Edeas mangeårige erfaring har vi lavet en støvle, som givere dansere fuld kontrol over deres skær og ekstra fleksibilitet med den lave støvle.</p>
                        <p>Den unikke indersål giver bedre føling med isen og stabilitet.</p>
                        <p>Stivhed: 70</p>
                        <p>Understøtter: Alle-danseniveauer</p>
                        <p>Pris: 2500,-</p>
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

                    <article>
                        <img src="img/chorus-edea-skates.jpg" alt="Chorus Edea skate">
                        <h3>Edea Chorus</h3>
                        <p>Antal stjerner: 4</p>
                        <p>Beskrivelse:</p>
                        <p>Edea har kombineret letvægts design og den nyeste teknologi ved produktionen af Chorus, som er et trin op fra Overture og udviklet til et højere niveau.</p>
                        <p>Når du begynder på dine dobbeltspring er Chorus den helt rigtige støvle for dig.</p>
                        <p>Hvis du ofte deltager i konkurrencer, kan Chorus hjælpe dig med at tage det næste skridt op på podiet.</p>
                        <p>Edea Chorus er 100% håndlavet italiensk design. Sålen er lavet af glasfiber og nylon, som giver dig en lettere kraftoverførsel fra fod til is, og som sikrer god stabilitet.</p>
                        <p>Stivhed: 70</p>
                        <p>Understøtter: dobbeltspring</p>
                        <p>Pris: 1825,-</p>
                        <button>Køb nu!</button>
                    </article>

                    <article>
                        <img src="img/overture-edea-skates.jpg" alt="Overture Edea skate">
                        <h3>Edea Overture</h3>
                        <p>Antal stjerner: 3</p>
                        <p>Beskrivelse:</p>
                        <p>Overture er en kombination af let design og Edea teknologi. Det er den mest solgte Edea støvle. Støvlen har stor støtte og fleksibilitet for kunstskøjteløbere, der arbejder på deres grundløb, enkeltspring og axel.</p>
                        <p>Overture er baseret på vores teknologisk viden om kunstskøjteløb på højt niveau og er baseret på vores passion for kunstskøjteløb.</p>
                        <p>Edea Overture er 100% håndlavet italiensk design. Støvlen er letvægtsdesign, som sikrer god responsivitet. Den giver en god fornemmelse for isen, som gør det lettere at udvikle det grundlæggende skøjteløb.</p>
                        <p>Stivhed: 48</p>
                        <p>Understøtter: enkeltspring Axel</p>
                        <p>Pris: 1175,-</p>
                        <button>Køb nu!</button>
                    </article> -->
                </div>
            </section>
        </main>

        <?php include "includes/footer.php"; ?>

    </div>

</body>
</html>