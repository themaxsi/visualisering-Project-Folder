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
    else
    {
        // $result = $db->query("SELECT * FROM products ORDER BY PID DESC LIMIT 3");
        
    }
    // while ($ProductArray = $result->fetch_assoc()) 
    // {
    //     echo "<pre>" . $ProductArray["PName"] . "<br>" . $ProductArray["PStars"] . "<br>"  . $ProductArray["PDesc"] . "<br>" . $ProductArray["PStiff"] . "<br>" . $ProductArray["PSupp"] . "<br>" . $ProductArray["PPrice"] . "<br>" . $ProductArray["PPic"] . "<br>" . $ProductArray["PStock"] . "<br> <br>" . "</pre>"; 
    //     $allProducts[] = $ProductArray;
    //     // echo "<pre>" . $allProducts . "</pre>";
    // }
    
    

    // function FirstCoupleOfProducts($result)
    // {
    //     while ($row = $result->fetch_assoc()) 
    //     {
    //        return( 
    //         "<article>
    //             <img src=" . "For-Assigment-with-help-3/img/".$row["PPic"] . " alt=" . $row["PName"] ."/>
    //             <h3>" . $row["PName"] . "</h3>
    //             <p>Antal stjerner: " . $row["PStars"] . "</p>
    //             <p>Beskrivelse:</p>
    //             <p>" . $row["PDesc"] . "</p>
    //             <p>Stivhed: " . $row["PStiff"] ."</p>
    //             <p>Understøtter: " . $row["PSupp"] . "</p>
    //             <p>Pris: " . $row["PPrice"] . "</p>
    //             <button>Køb</button>            
    //         </article>");
    //     }
    // }







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

                    <!-- <?php //echo FirstCoupleOfProducts($result)?> -->

                    <?php 
                        
                        $result12 = $db->query("SELECT * FROM products ORDER BY PID DESC LIMIT 3");
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
                            
                            // if (strpos($row['PPic'], " "))  //if there is more then one
                            // {
                            //     $img = explode(" ", $row["PPic"])[0];
                            // }
                            // elseif (!isset($row['PPic']))  //if there is no pic
                            // {
                            //     $img = "imagecomingsoon.png";
                            // }
                            // else //if there is 1 pic
                            // {
                            //     $img = $row['PPic'];
                            // }

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
                                <button><a href="showProduct.php?id=<?php echo $row['PID'] ?>">Køb nu!</a></button>
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
                    </article> -->
                </div>
            </section>
        </main>

        <?php include "includes/footer.php"; ?>

    </div>

</body>
</html>