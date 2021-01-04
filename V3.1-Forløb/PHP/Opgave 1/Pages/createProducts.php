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

if($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $tempImage = $_FILES["productPhoto"]["tmp_name"];

    // $photoName = $_FILES["productPhoto"]["name"];
    
    $photoName = basename($_FILES["productPhoto"]["name"]);

    $destination = "C:\Users\patr951a\Code\V3.1-Forløb\PHP\Opgave 1\images\\";

    $imageFullPath = $destination . $photoName;

    if (move_uploaded_file($tempImage, $imageFullPath))
    {
        echo $imageFullPath;

        $productCreatedMessages = "your product has been crated";

        $productName = "'" .$_POST["productName"]. "'";
        $productLeftInStock = "'" .$_POST["productLeftInStock"]. "'";
        $productPhoto = "'" .$imageFullPath. "'";
        $productDescription = "'" .$_POST["productDescription"]. "'";
        $productGenre = "'" .$_POST["productGenre"]. "'";
        $productSpecifications = "'" .$_POST["productSpecifications"]. "'";
        $productPrice = "'" .$_POST["productPrice"]. "'";
        $productAge = "'" .$_POST["productAge"]. "'";
        if ($db->error) 
        {
            echo $db->error;
        }
        else
        {
            $result = $db->query("SELECT * FROM products WHERE productName = $productName");

            if($result->num_rows == 0) 
            {
                $sql = "INSERT INTO products(productName, productLeftInStock, productPhoto, productDescription, productGenre, productSpecifications, productPrice, productAge)
                        VALUES($productName, $productLeftInStock, $productPhoto, $productDescription, $productGenre, $productSpecifications, $productPrice, $productAge)";

                if($db->query($sql)) 
                {
                        echo "<script type='text/javascript'>alert('$productCreatedMessages');</script>";
                        // header("Location: login.php");
                        
                }
                else
                {
                        echo $db->error;
                }
            }
        }
    }


    
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
                <li><a href=" createProducts.php">shop</a></li>
                <li><a href="#3">info</a></li>
                <?php echo logoutButton()?>
            </ul>
        </nav>
    </header>
        
    <main class="crateMain">
        <section>
        <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <div class="formContainerCreate">
                <h1>Crate product form</h1>

                    <!-- productName -->
                    <label for="productName"><b>product name</b></label>

                    <input type="text" placeholder="Enter product name*" name="productName" required>


                    <!-- productLeftInStock -->
                    <label for="productLeftInStock"><b>Email</b></label>

                    <input type="text" placeholder="Enter Amount left in stock*" name="productLeftInStock" required>

                    <!-- password -->
                    <label for="productPhoto "><b>Password</b></label>

                    <input type="file" placeholder="Send photo of product" name="productPhoto" required>

                    <!-- productDescription -->
                    <label for="productDescription"><b>Repeat Password</b></label>

                    <input type="text" placeholder="productDescription*" name="productDescription" required>

                    <!-- productGenre -->
                    <label for="productGenre"><b>product genre</b></label>

                    <input type="text" placeholder="Enter product Genre*" name="productGenre" required>

                    <!-- productSpecifications -->
                    <label for="productSpecifications"><b>product Specifications</b></label>

                    <input type="text" placeholder="Enter Specifications*" name="productSpecifications" required>
    
                    <!-- productPrice -->
                    <label for="productPrice"><b>product price</b></label>

                    <input type="text" placeholder="Enter product Price*" name="productPrice " required>

                    <!-- productAge -->
                    <label for="productAge"><b>Post product age</b></label>

                    <input type="text" placeholder="Enter product Age*" name="productAge" required>


                    <div>
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