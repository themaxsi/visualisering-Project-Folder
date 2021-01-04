<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Newsletter</title>
</head>
<body>

    <?php 
        include "includes/topmenu.php";

        include "includes/sidemenu.php";
    ?>

    <div class="content">
        <main>
            <?php
                if (isset($_POST['submit-newsletter']))
                {
                    if ($_POST['newsletter-firstname'] != "" && $_POST['newsletter-email'] != "")
                    {
            ?>
                        <h1>Tak for din tilmelding til vores nyhedsbrev!</h1>

                        <p>Kære <?php echo $_POST['newsletter-firstname']; ?></p>
                        
                        <p>Du vil nu modtage vores månedlige nyhedsbrev med gode tilbud og tips og tricks til, hvordan du passer bedst på dine skøjter.</p>

                        <p>Hvis du ikke længere ønsker at modtage nyhedsbrevet, kan du framelde dig enten under "Min konto" eller via linket i bunden af de nyhedsbreve, du modtager.</p>

                        <p>Med venlig hilsen</p>
                        <p>Dit Edea team</p>
            <?php
                    }
                    else
                    {
                        echo "<h1>Tilmelding til nyhedsbrev ikke gennemført</h1>
                        <p>Udfyld venligst både navn og mail-adresse, når du tilmelder dig nyhedsbrevet.</p>";
                    }
                }
            ?>

        </main>

        <?php include "includes/footer.php"; ?>
    </div>
        
</body>
</html>