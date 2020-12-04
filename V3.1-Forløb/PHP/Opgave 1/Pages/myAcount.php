<?php
if(!isset($_SESSION))
{
    session_start();
}
if(isset($_POST))
{
    $_SESSION["Post-Data"] = $_POST;
}


$db = new MySQLi("localhost", "maxsi", "1234qwer", "game_over_zone");

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
    $userNotInDBError = "user does not exist in db";
    $userIsDeleted = "user has been deleted";
    $username = $_SESSION["Post-Data-login"]["username"];
    echo $username;
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $result = $db->query("SELECT * FROM customers WHERE Username = $username");

        if($result->num_rows == 0) 
        {
            echo "<script type='text/javascript'>alert('$userNotInDBError');</script>";
        }
        else
        {
            if($db->query($sql)) 
                {
                    echo "<script type='text/javascript'>alert('$userIsDeleted');</script>";
                    header("Location: ../index.php");
                }
        }
    }
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
    <!-- <body class="Container <?php// echo checkNumber($minChangeColor)?> "> used to change background color depending on if the min is even or odd  -->
    <body class="">
    <header>
    <img class="icon" src="../images/user-icon.svg" alt="user icon">
    <img class="icon" src="../images/facebook-icon.svg" alt="Facebook icon">
    <img class="icon" src="../images/instagram-icon.svg" alt="instagram icon">
    <img class="icon" src="../images/twitter-icon.svg" alt="twitter icon">
    <img class="icon" src="../images/shopping-cart-icon.svg" alt="shopping cart icon">

    <!-- <img src="images/<php echo CheckMonths($monthForCheck)?>" alt="banner/logo"> -->

    

        <nav class="Area-nav">
            <ul>
                <li><a href="../index.php">Front page</a></li>
                <li><a href="#1">My account</a></li>
                <li><a href="#2">shopping cart</a></li>
                <li><a href="#3">info</a></li>
            </ul>
        </nav>
    </header>
        
    <main class="">
        <section>
            <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            
                <button name="submit" type="submit">Delete account</button>
                    
            
            </form>
        </section>
    </main>


    <footer>
        
    </footer>

	</body>
</html>