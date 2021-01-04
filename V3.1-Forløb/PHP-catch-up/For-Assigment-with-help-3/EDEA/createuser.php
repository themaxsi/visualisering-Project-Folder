<?php
    $db = new MySQLi("localhost", "halu", "1234", "v3cms");
    
    if($db->connect_error) 
    {
        die("Connection to database failed: ". $db->connect_error);
    }

    $userErr = $pwErr = $repeatPwErr = $emailErr = "";     // Variables to contain error-messages

    function testpwmatch ($pw1, $pw2)
    {

        if ($pw1 == $pw2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["newuser-username"])) 
        {
            $userErr = "Username is required";
        } 
        else 
        {
            $_SESSION["newuser-username"] = test_input($_POST["newuser-username"]);
        }
      
        if (empty($_POST["newuser-password"])) {
            $pwErr = "Password is required";
        }
        else
        {
            $_SESSION["newuser-password"] = test_input($_POST["newuser-password"]);   
        }

        if (empty($_POST["newuser-passwordrepeat"])) 
        {
            $repeatPwErr = "Please repeat password";
        } 
        else
        {
            if (testpwmatch($_POST["newuser-password"], $_POST["newuser-passwordrepeat"]))
            {
                $_SESSION["newuser-passwordrepeat"] = test_input($_POST["newuser-passwordrepeat"]);
            }

            else
            {
                $repeatPwErr = "The two passwords do not match";
            }
        }

        if (empty($_POST["newuser-email"])) 
        {
            $emailErr = "Email address is required";
        } 
        else 
        {

            if (!filter_var($_POST["newuser-email"], FILTER_VALIDATE_EMAIL))
            {
                $emailErr = "Invalid email format";
            }
            else
            {
                $_SESSION["newuser-email"] = test_input($_POST["newuser-email"]);
            } 
        }

        if (!empty($_POST["newuser-username"]) && !empty($_POST["newuser-password"]) && !empty($_POST["newuser-passwordrepeat"]) && !empty($_POST["newuser-email"]) && testpwmatch($_POST["newuser-password"], $_POST["newuser-passwordrepeat"]))
        {
            $username = "'" . $_POST["newuser-username"] . "'";
            $result = $db->query("SELECT * FROM edeausers WHERE Username = $username");

            if ($db->error)
            {
                echo $db->error;
            }
            else if ($result->num_rows == 0)
            { 
                if($db->query("INSERT INTO edeausers (Username, Password, Firstname, Lastname, Address, Postcode, Country, Email, Website) VALUE ('{$_POST['newuser-username']}', '{$_POST['newuser-password']}', '{$_POST['newuser-firstname']}', '{$_POST['newuser-lastname']}'
                , '{$_POST['newuser-address']}', '{$_POST['newuser-postcode']}', '{$_POST['newuser-country']}', '{$_POST['newuser-email']}', '{$_POST['newuser-website']}')"))
                {
                    header("Location: newuser-landing.php");
                }
                else
                {
                    echo "Brugeroprettelse lykkedes ikke";
                }
            }
            else
            {
                header("Location: alreadyuser.php");
            }
        }
    }

    function test_input($data) {
        $data = trim($data);                // Strips data of unnecessary characters (newline, tab, extra spaces)
        $data = stripslashes($data);        // Strips data of backslashes
        $data = htmlspecialchars($data);    // Changes HTML-characters to HTML encoded entities (&lt; < &gt; >)
        return $data;
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Newsletter</title>
</head>
<body>

    <?php 
        include "includes/topmenu.php";

        include "includes/sidemenu.php";
    ?>

    <div class="content">
        <main>
        <h1>Opret bruger</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>
                <label for="newuser-username">Brugernavn: </label>
                <input type="text" name="newuser-username" placeholder="Brugernavn" class="logininput">
                <span class="error">* <?php echo $userErr;?></span>
            </p>
            
            <p>
                <label for="newuser-password">Adgangskode: </label>
                <input type="text" name="newuser-password" placeholder="Adgangskode" class="logininput">
                <span class="error">* <?php echo $pwErr;?></span>
            </p>

            <p>
                <label for="newuser-passwordrepeat">Gentag adgangskode: </label>
                <input type="text" name="newuser-passwordrepeat" placeholder="Gentag adgangskode" class="logininput">
                <span class="error">* <?php echo $repeatPwErr;?></span>
            </p>

            <p>
                <label for="newuser-firstname">Fornavn: </label>
                <input type="text" name="newuser-firstname" placeholder="Fornavn" class="logininput">
            </p>
            
            <p>
                <label for="newuser-lastname">Efternavn: </label>
                <input type="text" name="newuser-lastname" placeholder="Efternavn" class="logininput">
            </p>

            <p>
                <label for="newuser-address">Adresse: </label>
                <input type="text" name="newuser-address" placeholder="Gade og nr." class="logininput">
            </p>

            <p>
                <label for="newuser-postcode">Postnummer: </label>
                <input type="text" name="newuser-postcode" placeholder="Postnummer" class="logininput">
            </p>
            
            <p>
                <label for="newuser-city">By: </label>
                <input type="text" name="newuser-city" placeholder="By" disabled class="logininput">
            </p>

            <p>
                <label for="newuser-country">Land: </label>
                <input type="text" name="newuser-country" placeholder="Land" class="logininput">
            </p>
            
            <p>
                <label for="newuser-email">E-mail: </label>
                <input type="text" name="newuser-email" placeholder="E-mail adresse" class="logininput">
                <span class="error">* <?php echo $emailErr;?></span>
            </p>
            
            <p>
                <label for="newuser-website">Website: </label>
                <input type="text" name="newuser-website" placeholder="Indtast URL på din hjemmeside" class="logininput">
            </p>
            
            <p>
                <input type="submit" name="newuser-submit" value="Opret" class="submitbtn">
            </p>
        </form>

        </main>

        <?php include "includes/footer.php"; ?>
    </div>
        
</body>
</html>