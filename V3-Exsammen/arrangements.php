<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    
    
    $db = new MySQLi("localhost", "maxsi", "1234qwer", "hansel_petal_flower");
    
    if($db->connect_error)
    {
        die("Connection to database failed: ". $db->connection_error);
    }
    if ($db->error) 
    {
        echo $db->error;
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hansel & Petal</title>
</head>

<body class="content">

    <?php include "includes/header.php"; ?>

    <main>
        <section class="featured">
            <h1>Floral Arrangements for Any Occasion</h1>
            <div class="twocol">
                <article>
                    <p>Hansel &amp; Petal offers you the freshest flowers for long-lasting enjoyment, and our designers create one-of-a-kind arrangements guaranteed to bring smiles to everyone's faces.</p><br>
                    <p>Choose from our popular arrangements or <a href="bouquet.php" class="btn">Create Your Own Custom Bouquet </a></p>
                </article>
                <article>
                    <p class="overlay large">Spring Lilacs and Tulips</p>
                    <p class="overlay price">Starting at $39.95</p>
                    <img src="img/980_lilacs_tulips_157045915.jpg" alt="Mixed Arrangement">
                </article>
            </div>
        </section>
        <section>
            <article class="arrindex">
                <ul class="indexcontent">

                    
                <?php 
                        
                        $result12 = $db->query("SELECT * FROM arrangements ORDER BY id ASC");
                        while ($row = $result12->fetch_assoc()) 
                        {
                            if (isset($row["image"])) //checks if the variable has a value
                            {
                                if (strpos($row['image'], " "))  //if there is more then one
                                {
                                    $img = explode(" ", $row["image"])[0];
                                }
                                else //if there is 1 pic
                                {
                                    $img = $row['image'];
                                }
                            }
                            else // if there is no pic
                            {
                                $img = "imagecomingsoon.png";
                            }
                            
                            

                            ?>
                            <li>
                                <a href="arrdetails.php?id=<?php echo $row['id']?>">
                                    <img src="<?php echo 'img/'.$img ?>" alt="<?php echo $row['alt'] ?>">
                                    <h4><?php echo $row['title']?></h4>
                                    <p>From <?php echo $row['price']?></p>
                                </a>
                            </li>


                        <?php 
                        }
                        ?> 



                </ul>
            </article>
        </section>
    </main>
    
    <?php include "includes/footer.php"; ?>
</body>
</html>