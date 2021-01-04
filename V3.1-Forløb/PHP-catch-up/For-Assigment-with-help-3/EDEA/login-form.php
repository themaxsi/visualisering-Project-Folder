<?php
    // Connect to userdatabase

    $db = new MySQLi("localhost", "halu", "1234", "v3cms");
    
    if($db->connect_error) 
    {
        die("Connection to database failed: ". $db->connect_error);
    }

    $userErr = $pwErr = "";     // Variables to contain error-messages

    // Check if input fields are empty. If they are not move form input to $_SESSION variable

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["login-username"])) {
            $userErr = "Username is required";
        } else {
            $_SESSION["login-username"] = test_input($_POST["login-username"]);
        }
      
        if (empty($_POST["login-password"])) {
            $pwErr = "Password is required";
        } else {
            $_SESSION["login-password"] = test_input($_POST["login-password"]);
        }

        // If there is input in both username and password field connect to table to get username and password

        if (!empty($_POST["login-username"] && $_POST["login-password"]))
        {
            $username = "'" . $_POST["login-username"] . "'";
            $result = $db->query("SELECT * FROM edeausers WHERE Username = $username");

            if ($db->error)
            {
                echo $db->error;
            }
            else if ($result->num_rows == 0)
            {
                echo "Brugeren eksisterer ikke. <p>Ønsker du at <a href='createuser.php'>oprette en bruger?</a></p><br><br>";
            }
            else
            { 
                $row = $result->fetch_assoc();
                if ($row['Password'] == $_POST['login-password'])
                {
                    $_SESSION["login-submit"] = $_POST["login-submit"];
                    header("Location: index.php");
                }
                else
                {
                    echo "Du har indtastet en forkert adgangskode!";
                }
            }
        }
    }

    function test_input($data) 
    {
        $data = trim($data);                // Strips data of unnecessary characters (newline, tab, extra spaces)
        $data = stripslashes($data);        // Strips data of backslashes
        $data = htmlspecialchars($data);    // Changes HTML-characters to HTML encoded entities (&lt; < &gt; >)
        return $data;
    }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p>
        <label for="login-username" class="loginform">Brugernavn: </label>
        <input type="text" name="login-username" placeholder="Brugernavn" class="logininput" value="<?php
                if(isset($_POST["login-username"]))
                {
                    echo trim($_POST["login-username"], "'");
                }
            ?>">
        <span class="error">* <?php echo $userErr;?></span>
    </p>
    
    <p>
        <label for="login-password" class="loginform">Adgangskode: </label>
        <input type="text" name="login-password" placeholder="Adgangskode" class="logininput">
        <span class="error">* <?php echo $pwErr;?></span>
    </p>
    
    <p>
        <input type="submit" name="login-submit" value="Login" class="submitbtn loginbtn">
    </p>
</form>