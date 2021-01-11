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

    <nav class="top">
        <ul>
            <li><a href="#"><img src="img/FacebookIcon-bw.png" alt="Facebook Icon"></li>
            <li><a href="#"><img src="img/InstagramIcon-bw.png" alt="Instagram Icon"></li>
            <li><a href="#"><img src="img/TwitterIcon-bw.png" alt="Twitter Icon"></li>
            <li><a href="#"><img src="img/YoutubeIcon-bw.png" alt="Youtube Icon"></li>
            <?php 
                if (isset($_SESSION['login-submit'])) 
                {
                    echo "<li>Velkommen, {$_SESSION['login-username']}</li>
                    <li><a href='#'>Min konto</a></li>";
                }
                else
                {
                    echo "<li><a href='login.php'>login</a></li>";
                }
            
            ?>
            <li class="carticon"><a href="#"><img src="img/shopping-cart-solid.svg" alt="shopping cart icon"></a></li>
            <li><a href="#">Min kurv</a></li>

        </ul>
    </nav>

    <nav class="side">
                    
        <a href="index.php"><img src="img/edea-skates-logo.png" alt="Edea logo"></a>
        <ul>
            <li><a href="index.php">Forside</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="omos.php">Om os</a></li>
            <?php 
                if (isset($_SESSION['login-submit']))
                {
                    echo "<li><a href='logout.php'>Log ud</a></li>";
                }
                else
                {
                    echo "<li><a href='login.php'>Login</a></li>";
                    echo "<li><a href='createuser.php'>Opret bruger</a></li>";
                }
            ?>
            
        </ul>

    </nav>

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
    
    
    
    
    </main>

    <footer>

    <div>
        <a href="#">Kundeservice</a>
        <a href="#">Handelsbetingelser</a>
        <a href="#">Klinger</a>
        <a href="#">FAQ</a>
    </div>

    <div>
        <a href="#">Presse</a>
        <a href="#">Kontakt</a>
        <p>Følg os:</p>
        <div class="footerSoMe">
            <a href="#"><img src="img/facebookIcon-bw.png" alt="Facebook logo"></a>
            <a href="#"><img src="img/instagramIcon-bw.png" alt="Instagram logo"></a>
            <a href="#"><img src="img/twitterIcon-bw.png" alt="Twitter logo"></a>
            <a href="#"><img src="img/youtubeIcon-bw.png" alt="YouTube logo"></a>
        </div>
    </div>
    <div>
        <h3>Nyhedsbrev</h3>
        <form action="newsletter-landing.php" method="post">
            <p>
                <label for="firstname">Fornavn: </label>
                <input type="text" name="newsletter-firstname" placeholder="Fornavn">
            </p>
            
            <p>
                <label for="newsletter-email">Email adresse: </label>
                <input type="text" name="newsletter-email" placeholder="Email adresse">
            </p>
            
            <p>
                <input type="submit" name="submit-newsletter" value="Tilmeld" class="submitbtn">
            </p>
        </form>


    </div>

</footer>

</body>
</html>