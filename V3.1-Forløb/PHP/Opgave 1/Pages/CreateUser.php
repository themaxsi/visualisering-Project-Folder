<?php
if(!isset($_SESSION))
{
    session_start();
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
            
        <form method="post" action="UserCreatedComplete.php">
            <div class="formContainerCreate">
                <h1>Sign Up Form</h1>

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

                    <!-- city -->
                    <label for="city"><b>city</b></label>

                    <input type="text" placeholder="Enter city*" name="city" required>

                    <!-- country -->
                    <label for="country"><b>country</b></label>

                    <input type="text" placeholder="Enter country*" name="country" required>

                    <!-- phoneNumber -->
                    <label for="phoneNumber"><b>country</b></label>

                    <input type="text" placeholder="Enter phone Number*" name="phoneNumber" required>

                    <!-- gender -->
                    <div class="genderArea">
                        <div>
                            <input type="radio" id="male" name="gender" value="male">
                            <label class="genderColor" for="male">Male</label><br>
                        </div>
                        <div>
                            <input type="radio" id="female" name="gender" value="female">
                            <label class="genderColor" for="female">Female</label><br>
                        </div>
                        <div>
                            <input type="radio" id="NoneBinary" name="gender" value="NoneBinary">
                            <label class="genderColor" for="other">None binary</label> <br>
                        </div>
                    </div>

                    <!-- age -->

                    <label for="age"><b>age</b></label>

                    <input type="text" placeholder="Enter age" name="age">

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