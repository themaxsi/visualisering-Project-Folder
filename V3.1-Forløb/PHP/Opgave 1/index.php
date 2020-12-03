<?php 
if(!isset($_SESSION))
{
    session_start();
}



$minChangeColor = date('i');            //<?php echo $minChangeColor
$monthForCheck = date('m');             //<?php echo $monthForCheck

function checkNumber($num)              //out of use
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
function CheckMonths($month)            //out of use
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
//December januar februar
//marts april maj
//juni juli august
//september oktober november

function CheckMonthsAndWriteText()
{
    $tempMonth = date('m');

    $tempMonthRes = "";
    $tempMonthNumRes = "";
    $tempSeasonRes = "";
    $tempTextRes = "";

    $monthArray = array
    (
        "december" => 12,       //winter
        "januar" => 1,          //winter
        "februar" => 2,         //winter
        "marts" => 3,           //spring
        "april" => 4,           //spring
        "maj" => 5,             //spring   
        "juni" => 6,            //summer
        "juli" => 7,            //summer
        "august" => 8,          //summer         
        "september" => 9,       //fall
        "oktober" => 10,        //fall
        "november" => 11        //fall
    );
    $monthArrayNum = array
    (
        1 => 1,         //winter
        2 => 1,         //winter
        3 => 2,         //spring
        4 => 2,         //spring
        5 => 2,         //spring   
        6 => 3,         //summer
        7 => 3,         //summer
        8 => 3,         //summer         
        9 => 4,         //fall
        10 => 4,        //fall
        11 => 4,        //fall
        12 => 1         //winter
    );
    $seasonsArray = array
    (
        "winter" => 1,
        "spring" => 2, 
        "summer" => 3, 
        "fall" => 4
    );
    $textArray = array
    (
        "Er dine skøjter helt up-to-date til sæsonens siste konkurrencer?" => 1, 
        "Skal du have nye skøjter klar til næste sæsons programmer?" => 2,
        "Off-ice træning er i fuld gang. Viste du, at vi også sælger in-line rulleskøjtehjul til at sætte under dine Edea støvler" => 3,
        "Er du kommet godt i gang med sæsonen? Er dine skøjter klar til de første konkurrencer?" => 4
    );
    print_r($monthArrayNum);

    $tempMonthRes = array_search($tempMonth, $monthArray);
    return $tempMonthNumRes = array_search($tempMonth, $monthArrayNum);
    $tempSeasonRes = array_search($tempMonthNumRes, $seasonsArray);
    $tempTextRes = array_search($tempMonthNumRes, $textArray);


    // if ($tempMonth <= 12) 
    // {
    //     return("<p>{$tempMonthRes}, {$tempMonthNumRes}, {$tempSeasonRes}, {$tempTextRes}</p>");
    // }

    // if ($tempMonth <= 2) 
    // {
    //     return("<p>Det er {$tempMonthRes} og der med {$tempSeasonRes}. {$tempTextRes}</p>");
    // }
    // else if ($tempMonth <= 5) 
    // {
    //     return("<p>Det er {$tempMonthRes} og der med {$tempSeasonRes}. {$tempTextRes}</p>");
    // }
    // else if ($tempMonth <= 8) 
    // {
    //     return("<p>Det er {$tempMonthRes} og der med {$tempSeasonRes}. {$tempTextRes}</p>");
    // }
    // else if ($tempMonth <= 11) 
    // {
    //     return("<p>Det er {$tempMonthRes} og der med {$tempSeasonRes}. {$tempTextRes}</p>");
    // }
    // else if ($tempMonth == 12) 
    // {
    //     return("<p>Det er {$tempMonthRes} og der med {$tempSeasonRes}. {$tempTextRes}</p>");
    // }
    // else
    // {
    //     return("<p>ERROR</p>");
    // }


}


function loginBox()
{
    print_r($_SESSION);

    if(isset($_SESSION["Post-Data-login"]))
    {
        
    }

    // return("<p>you are logged in as {$_SESSION["Post-Data-login"]["username"]}</p>");
}

function logoutButton()
{
    if(isset($_SESSION["Post-Data-login"]))
    {
        return("<li><a href='Pages/logout.php'>Logout</a></li>");
    }
    else
    {
        return("<li><a href='Pages/login.php'>Login</a></li>");
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

    <img class="banner" src="images/BannerPic2.jpg" alt="banner/logo">

       

        <nav class="Area-nav">
            <ul>
                <li><a href="../index.php">Front page</a></li>
                <li><a href="Pages\login.php">My account</a></li>
                <li><a href="#2">shopping cart</a></li>
                <li><a href="#3">info</a></li>
                <?php echo logoutButton()?>
            </ul>
        </nav>
    </header>
        
    <main>
        <section>

            <!-- <pre><//?php echo CheckMonthsAndWriteText?></pre> -->

            <div Class="loggedInBox">
              <pre><?php echo loginBox()?></pre>
            </div>
            <pre><?php print_r($_POST);?></pre>




        <!-- <div class="newsBox">
            <form class="newsBoxForm" action="../Opgave 1/Pages/SignUpNewsCompelet.php" method="post">
                <div class="NewsLetter">
                    <h2>Subscribe to our Newsletter</h2>
                </div>

                <div class="NewsLetter" >
                    <input type="text" placeholder="First name" name="firstName" required> <br>
                    <input type="text" placeholder="Last name" name="lastName" required>   <br>
                    <input type="text" placeholder="Email address" name="mail" required>   <br>
                    <label>
                        <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
                    </label>
                </div>

                <div class="NewsLetter">
                    <input type="submit" name="submit" value="Subscribe" >
                </div>
            </form>
        </div> -->
        </section>
    </main>


    <footer>
        
    </footer>

	</body>
</html>