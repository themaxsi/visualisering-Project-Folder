<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_GET))
    {
        $_SESSION = $_GET;
    }

    $ID = $_SESSION["id"];


    $db = new MySQLi("localhost", "maxsi", "1234qwer", "hansel_petal_flower");
    
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
        $result = $db->query("SELECT * FROM arrangements WHERE id = $ID");
        
    }
    $productRow = $result->fetch_assoc();
    for ($i=0; $i < 4; $i++) 
    { 
        if (isset($productRow["image"])) //checks if the variable has a value
        {
            if (strpos($productRow['image'], " "))  //if there is more then one
            {
                $img = explode(" ", $productRow["image"]);
            }
            else //if there is 1 pic
            {
                $img[0] = $productRow['image'];
            }
        }
        else // if there is no pic
        {
            $img[0] = "imagecomingsoon.png";
        }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hansel & Petal</title>
</head>

<body class="content">

    <?php include "includes/header.php"; ?>

    <main class="arrdetails">
        <section>

            <article>
                <?php 
                    for ($j=0; $j < count($img); $j++) 
                    { 
                        echo "<img src='img/{$img[$j]}'>";
                    }
                ?>
                <p class="arrprice">Price from <?php echo $productRow['price'] ?></p>
            </article>

            <article>
                <h1><?php echo $productRow['title']?></h1>
                <p><?php echo $productRow['description']?></p>
            </article>
           
           
            <article>
                <h3>How to Order</h3>
                <p>All the flowers for our mixed arrangements are carefully selected by <a href="designers.php">our talented designers</a> using the freshest flowers in season.</p>
                <p>To discuss your individual requirements, please call Hansel and Petal toll-free on <b>800-555-0199</b>.</p>
            </article>
        </section>
    </main>

    <?php include "includes/footer.php"; ?>

</body>
</html>
