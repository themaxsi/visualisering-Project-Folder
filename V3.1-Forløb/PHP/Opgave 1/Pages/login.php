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
    $result = $db->query("SELECT * FROM customers");
}
while ($UserArray = $result->fetch_assoc()) 
{
    echo $UserArray["Username"]." ".$UserArray["Password"] . "<br>"; 
    $allUsers[] = $UserArray;
}

if(isset($_POST["username"]))
{
    $wrongPassMessage = "you put in the wrong password or username";

    $username = "'" .$_POST["username"]. "'";

    $result = $db->query("SELECT * FROM customers WHERE Username = $username");

    $row = $result->fetch_assoc();
    if ($row["Password"] == $_POST["password"]) 
    {
        $_SESSION["Post-Data-login"] = $_POST;
        if(isset($_SESSION["Post-Data-login"])) 
        {
            header("Location: ../index.php");
        }
    }
    else 
    {
        echo "<script type='text/javascript'>alert('$wrongPassMessage');</script>";
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
        
    <main class="loginMain">
        <section>
            <form class="loginFrom" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <div class="containerLogin">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                     <button name="login-submit" type="submit">Login</button>
                    <label >
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>

                <div class="containerLogin">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="password">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </section>
    </main>


    <footer>
        
    </footer>

	</body>
</html>