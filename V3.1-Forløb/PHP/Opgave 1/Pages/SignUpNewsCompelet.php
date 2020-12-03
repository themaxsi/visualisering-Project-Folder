<?php
if(!isset($_SESSION))
{
    session_start();
}
if(isset($_POST))
{
    $_SESSION = $_POST;
}

function NewsComplete($ses)
{
    return("<br> <p>Kære {$ses["firstName"]}. du har tildmelt vores nyhedsbrev. <br>Vi glæder os til hver måned at bringe dig spændeende nyheder fra Spil verden.<br> husk, at du altid kan afmelde dig nyhedsbrevet igen ved at følge linket i bunden af nyhedsbrevet.<br> med venlig hilsen GameOver Zone </p>");
}

?>
<!doctype html>
<html lang="en">
	<head>
		
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GameOver Zone</title>
		<link type="text/css" rel="stylesheet" href="../style.css">
	 </head>
    <!-- <body class="Container <?php //echo checkNumber($minChangeColor)?> "> used to change background color depending on if the min is even or odd  -->
    <body class="container">
    <header>
    <img class="icon" src="../images/user-icon.svg" alt="user icon">
    <img class="icon" src="../images/facebook-icon.svg" alt="Facebook icon">
    <img class="icon" src="../images/instagram-icon.svg" alt="instagram icon">
    <img class="icon" src="../images/twitter-icon.svg" alt="twitter icon">
    <img class="icon" src="../images/shopping-cart-icon.svg" alt="shopping cart icon">

   

        <nav class="Area-nav">
            <ul>
                <li><a href="Pages\login.php">My account</a></li>
                <li><a href="#2">shopping cart</a></li>
                <li><a href="#3">info</a></li>
            </ul>
        </nav>
    </header>
        
    <main>
        <section>


        <?php echo NewsComplete($_SESSION)?>

        
        </section>
    </main>


    <footer>
        
    </footer>

	</body>
</html>