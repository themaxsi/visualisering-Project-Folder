<?php 
$minChangeColor = date('i');            //<?php echo $minChangeColor
$monthForCheck = date('m');             //<?php echo $monthForCheck

function checkNumber($num)
{
    if($num % 2 == 0)
    {
        return "dark";
    }
    else
    {
        return "light";
    }
}
function CheckMonths($month)
{
    if($month <= 6)
    {
        return "GameOver-Zone.png";
    }
    else
    {
        return "BannerPic2.jpg";
    }
}


?>
<!doctype html>
<html lang="en">
	<head>
		
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GameOver Zone</title>
		<link type="text/css" rel="stylesheet" href="style.css">
	 </head>
    <!-- <body class="Container <?php echo checkNumber($minChangeColor)?> "> used to change background color depending on if the min is even or odd  -->
    <body class="container">
    <header>
    <img class="icon" src="images/user-icon.svg" alt="user icon">
    <img class="icon" src="images/facebook-icon.svg" alt="Facebook icon">
    <img class="icon" src="images/instagram-icon.svg" alt="instagram icon">
    <img class="icon" src="images/twitter-icon.svg" alt="twitter icon">
    <img class="icon" src="images/shopping-cart-icon.svg" alt="shopping cart icon">

    <!-- <img src="images/<?php echo CheckMonths($monthForCheck)?>" alt="banner/logo"> -->

    

        <!-- <nav class="Area-nav">
            <ul>
                <li><a href="#1">My account</a></li>
                <li><a href="#2">shopping cart</a></li>
                <li><a href="#3">info</a></li>
            </ul>
        </nav> -->
    </header>
        
    <main>
        <section>
        
        </section>
    </main>


    <footer>
        
    </footer>

	</body>
</html>