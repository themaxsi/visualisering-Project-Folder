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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>New user</title>
</head>
<body>

    <?php 
        include "includes/topmenu.php";

        include "includes/sidemenu.php";
    ?>

    <div class="content">
        <main>
            <h1>Bruger oprettet</h1>

            <p>Tak fordi du oprettede en bruger hos Edea skates.</p>
            <p>Du kan nu logge ind på sitet.</p>
            <p>Med venlig hilsen</p>
            <p>Dit Edea team</p>

            <?php include "login-form.php" ?>

        </main>

        <?php include "includes/footer.php"; ?>
    </div>
        
</body>
</html>