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
// $result = $db->query("SELECT * FROM Users WHERE Username = $username");
// while ($customersArray = $result->fetch_assoc()) 
// {
//     echo $customersArray["Username"]." ".$customersArray["Password"] . "<br>"; 
//     $allCustomers[] = $customersArray;
// }

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $ErrorMessageUsername = "username already taken";
    $ErrorMessagePassword = "Passwords does not match";
    $UserCreatedMessages = "The user has been created you can now login";
    $username = "'" .$_POST["Username"]. "'";
    $password = "'" .$_POST["password"]. "'";
    $firstName = "'" .$_POST["firstName"]. "'";
    $lastName = "'" .$_POST["lastName"]. "'";
    $address = "'" .$_POST["PostNumber"]. "'";
    $postCode = "'" .$_POST["PostNumber"]. "'";
    $country = "'" .$_POST["country"]. "'";
    $email = "'" .$_POST["email"]. "'";
    $website = "'" .$_POST["WebSite"]. "'";
    if ($db->error) 
    {
        echo $db->error;
    }
    else
    {
        $result = $db->query("SELECT * FROM customers WHERE Username = $username");

        if($result->num_rows == 0) 
        {
            if($_POST["password"] == $_POST["repeatPassword"])
            {
                $sql = "INSERT INTO customers(Username, Password, Firstname, Lastname, Address, Postcode, Country, Email, Website)
                VALUES($username, $password, $firstName, $lastName, $address, $postCode, $country, $email, $website)";

                if($db->query($sql)) 
                {
                    echo "<script type='text/javascript'>alert('$UserCreatedMessages');</script>";
                    header("Location: login.php");
                    
                }
                else
                {
                    echo $db->error;
                }
            }
            else
            {
                echo "<script type='text/javascript'>alert('$ErrorMessagePassword');</script>";
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('$ErrorMessageUsername');</script>";
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
    <body class="containerCreate">
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
        
    <main class="crateMain">
        <section>
            
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <div class="formContainerCreate">
                <h1>Sign Up Form</h1>

                    <!-- UserName -->
                    <label for="Username"><b>Username</b></label>

                    <input type="text" placeholder="Enter Username*" name="Username" required>


                    <!-- email -->
                    <label for="email"><b>Email</b></label>

                    <input type="text" placeholder="Enter Email*" name="email" required>

                    <!-- password -->
                    <label for="password"><b>Password</b></label>

                    <input type="password" placeholder="Enter Password*" name="password" required>

                    <!-- repeat password -->
                    <label for="repeatPassword"><b>Repeat Password</b></label>

                    <input type="password" placeholder="Repeat Password*" name="repeatPassword" required>

                    <!-- first name -->
                    <label for="firstName"><b>First Name</b></label>

                    <input type="text" placeholder="Enter First Name*" name="firstName" required>

                    <!-- last name -->
                    <label for="lastName"><b>Last Name</b></label>

                    <input type="text" placeholder="Enter Last Name*" name="lastName" required>
    
                    <!-- address -->
                    <label for="address"><b>address</b></label>

                    <input type="text" placeholder="Enter address*" name="address" required>

                    <!-- Post number -->
                    <label for="PostNumber"><b>Post number</b></label>

                    <input type="text" placeholder="Enter Post number*" name="PostNumber" required>

                    <!-- country -->
                    <label for="country"><b>country</b></label>

                    <input type="text" placeholder="Enter country*" name="country" required>

                    <!-- WebSite -->
                    <label for="WebSite"><b>Website</b></label>

                    <input type="text" placeholder="Enter Website*" name="WebSite" required>

                   
                    
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a><p>
                    <div>
                        <button type="button" class="cancel">Cancel</button>
                        <button type="submit" name="submit" class="signup">Sign Up</button>
                    </div>
            </div>
        </form>

        </section>
    </main>


    <footer>
        
    </footer>

	</body>
</html>