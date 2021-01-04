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
 
    <div class="aboutus">

        <main>
            <h1>Om os</h1>
            <section>
                <article>
                    <p>Edea støvler er designet til at være lettere. Kombinationen af moderne materialer og højteknologisk design har gjort det muligt at producere Edea støvler som er lette. Mindre vægt betyder hurtigere, højere og længere spring - længere "tid i luften". Mindre vægt betyder desuden bedre acceleration og bedre skøjteløb.</p>

                    <p>Sammenlignet med nogle standard støvler er Edea støvler op til 50% lettere.</p>
                    <p>I forhold til andre formodede lette støvler har Edea en reduktion i vægt på op til 20-30%.</p>

                    <h3>7 gode grunde til at Edea forbedrer dit skøjteløb:</h3>

                    <ul>
                        <li>Ultra lette</li>
                        <li>Mere kontrol og stabilitet - større føling med isen</li>
                        <li>Mere komfort</li>
                        <li>Hurtig tilpasning</li>
                        <li>Kort tilvænningstid</li>
                        <li>Større sikkerhed  - mere fortrolighed med støvlen</li>
                        <li>100% italiensk</li>
                    </ul>

                    <img src="img/size-matching-chart.jpg" alt="Edea størrelses skema">

                    <h3>Edea støvler fås i 4 bredder</h3>
                    <p>B (smal), C (standard), D (bred), E (ekstra bred)</p>
                </article>
            </section>
        </main>

        <?php include "includes/footer.php"; ?>

    </div>

</body>
</html>