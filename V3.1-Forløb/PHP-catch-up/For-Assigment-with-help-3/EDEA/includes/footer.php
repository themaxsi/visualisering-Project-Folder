<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

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