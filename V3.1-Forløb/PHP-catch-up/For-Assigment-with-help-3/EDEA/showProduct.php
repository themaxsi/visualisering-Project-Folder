<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    if(isset($_GET))
    {
        $_SESSION = $_GET;
    }

    $PID = $_SESSION["id"];

    $db = new MySQLi("localhost", "maxsi", "1234qwer", "edea_skates_db");
    
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
        $result = $db->query("SELECT * FROM products WHERE PID = $PID");
        
    }
    $productRow = $result->fetch_assoc();
    for ($i=0; $i < 6; $i++) 
    { 
        if (strpos($productRow['PPic'], " "))  //if there is more then one
        {
            $img = explode(" ", $productRow["PPic"]);
        }
        elseif (empty($productRow[$i]['PPic']))  // if there is no pic
        {
            $img[0] = "imagecomingsoon.png";
        }
        else //if there is 1 pic
        {
            $img[0] = $productRow[$i]['PPic'];
        }
       
    }
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>EDEA skates</title>
</head>
<html>

<body>

    <?php 
        include "includes/topmenu.php"; 
        include "includes/sidemenu.php";
    ?>
 
    <div class="content">

        <main>
            <h1 class="productHeader"><?php echo $productRow["PName"]?></h1>
            <div class="showProduct">
                <section class="leftColumn">

                    <?php 
                        for ($j=0; $j < count($img); $j++) 
                        { 
                            echo "<p><img src='img/{$img[$j]}'></p>";
                        }
                    ?>


                    <!-- <p><img src="<?php echo 'img/'.$img ?>" alt="<?php echo $productRow['PName'] ?>"></p> -->
                    
                </section>
                <section class="rightColumn">
                    <div class="rightColumnTop">
                        <h2>Beskrivelse:</h2>
                        <p><?php echo $productRow["PDesc"]?></p>
                    </div>
                    <div class="rightColumnDown">
                        <p><span>Antal stjerner: </span><?php echo $productRow["PStars"];?></p>
                        <p><span>Støvle stivhed: </span><?php echo $productRow["PStiff"];?></p>
                        <p><span>Understøtter: </span><?php echo $productRow["PSupp"];?></p>
                        <p><span>Pris: </span><?php echo $productRow["PPrice"];?></p>
                        <button><a href="#">Køb nu!</a></button>
                    </div>
                </section>
            </div>
        </main>
        
        <?php include "includes/footer.php"; ?>

    </div>

</body>
</html>