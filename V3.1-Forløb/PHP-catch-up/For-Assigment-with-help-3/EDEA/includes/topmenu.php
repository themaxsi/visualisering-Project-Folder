<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<nav class="top">
    <ul>
        <li><a href="#"><img src="img/facebookIcon-bw.png" alt="Facebook logo"></a></li>
        <li><a href="#"><img src="img/instagramIcon-bw.png" alt="Instagram logo"></a></li>
        <li><a href="#"><img src="img/twitterIcon-bw.png" alt="Twitter logo"></a></li>
        <li><a href="#"><img src="img/youtubeIcon-bw.png" alt="YouTube logo"></a></li>
        <?php 
            if (isset($_SESSION['login-submit']))
            {
                echo "<li>Velkommen, {$_SESSION['login-username']}</li>
                <li><a href='#'>Min konto</a></li>";
            }
            else
            {
                echo "<li><a href='login.php'>Login</a></li>";
            }
        ?>
        
        <li class="carticon"><a href="#"><img src="img/shopping-cart-solid.svg" alt="shopping cart icon"></a></li>
        <li><a href="#">Min kurv</a></li>
    </ul>
</nav>