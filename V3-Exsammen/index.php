<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_POST))
    {
        $_SESSION["Post-Data"] = $_POST;
    }

    $minDBId = 1;
    $maxDBId = 24;

    //for calculating rabat on popular flowers
    $percentage = 5;


    //For finding 4 random arrangements
    $randNr1 = rand($minDBId, $maxDBId);
    $randNr2 = rand($minDBId, $maxDBId);
    $randNr3 = rand($minDBId, $maxDBId);
    $randNr4 = rand($minDBId, $maxDBId);
    //to check if there is more then one of the same number
    if ($randNr1 == $randNr2 || $randNr1 == $randNr3 || $randNr1 == $randNr4) 
    {
        $randNr1 = rand($minDBId, $maxDBId);
    }
    if ($randNr2 == $randNr1 || $randNr2 == $randNr3 || $randNr2 == $randNr4) 
    {
        $randNr2 = rand($minDBId, $maxDBId);
    }
    if ($randNr3 == $randNr1 || $randNr3 == $randNr2 || $randNr3 == $randNr4) 
    {
        $randNr3 = rand($minDBId, $maxDBId);
    }
    if ($randNr4 == $randNr1 || $randNr4 == $randNr2 || $randNr4 == $randNr3) 
    {
        $randNr3 = rand($minDBId, $maxDBId);
    }



    if(isset($_POST))
    {
        $_SESSION["Post-Data"] = $_POST;
    }

    // Database connection
    $db = new MySQLi("localhost", "maxsi", "1234qwer", "hansel_petal_flower");
    
    if($db->connect_error)
    {
        die("Connection to database failed: ". $db->connection_error);
    }
    if ($db->error) 
    {
        echo $db->error;
    }



    //checks date and gives it the right pic for the season
    function ChangeSeasonFlowerPic()
    {
        $tempMonth = date('m');

        switch ($tempMonth) {
            case '1':
                return("<img src='img/feature_winter.jpg' alt='cactus arrangements'>");
                break;
            case '2':
                return("<img src='img/feature_spring.jpg' alt='Flower hearts arrangements'>");
                break;
            case '3':
                return("<img src='img/feature_spring.jpg' alt='Red flower arrangements'>");
                break;
            case '4':
                return("<img src='img/feature_spring.jpg' alt='White Rose arrangement'>");
                break;
            case '5':
                return("<img src='img/feature_summer.jpg' alt='Red flower arrangement'>");
                break;
            case '6':
                return("<img src='img/feature_summer.jpg' alt='purple flower arrangement'>");
                break;
            case '7':
                return("<img src='img/feature_summer.jpg' alt='White flower arrangement'>");
                break;
            case '8':
                return("<img src='img/feature_autumn.jpg' alt='yellow flower arrangement'>");
                break;
            case '9':
                return("<img src='img/feature_autumn.jpg' alt='pink/white flower arrangement'>");
                break;
            case '10':
                return("<img src='img/feature_autumn.jpg' alt='pink flower arrangement'>");
                break;
            case '11':
                return("<img src='img/feature_winter.jpg'' alt='Green tree arrangement'>");
                break;
            case '12':
                return("<img src='img/feature_winter.jpg'' alt='brown flower arrangement'>");
                break;
            
            default:
                return("<img src='img/imagecomingsoon.png' alt='error'>");
                break;
        }
    }
    //checks date and gives it the right pic for the month
    function ChangeMonthFlowerPic()
    {
        $tempMonth = date('m');

        switch ($tempMonth) {
            case '1':
                return("<img src='img/special_jan.jpg' alt='cactus arrangements'>");
                break;
            case '2':
                return("<img src='img/special_feb.jpg' alt='Flower hearts arrangements'>");
                break;
            case '3':
                return("<img src='img/special_mar.jpg' alt='Red flower arrangements'>");
                break;
            case '4':
                return("<img src='img/special_apr.jpg' alt='White Rose arrangement'>");
                break;
            case '5':
                return("<img src='img/special_may.jpg' alt='Red flower arrangement'>");
                break;
            case '6':
                return("<img src='img/special_jun.jpg' alt='purple flower arrangement'>");
                break;
            case '7':
                return("<img src='img/special_jul.jpg' alt='White flower arrangement'>");
                break;
            case '8':
                return("<img src='img/special_aug.jpg' alt='yellow flower arrangement'>");
                break;
            case '9':
                return("<img src='img/special_sep.jpg' alt='pink/white flower arrangement'>");
                break;
            case '10':
                return("<img src='img/special_oct.jpg' alt='pink flower arrangement'>");
                break;
            case '11':
                return("<img src='img/special_nov.jpg' alt='Green tree arrangement'>");
                break;
            case '12':
                return("<img src='img/special_dec.jpg' alt='brown flower arrangement'>");
                break;
            
            default:
                return("<img src='img/imagecomingsoon.png' alt='error'>");
                break;
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
    

    <main>
        <section class="featured">
            <h1>Beautiful Flowers, Artfully Arranged</h1>
            <article>
                <p class="overlay header">Beautiful arrangements for any occasion</p>
                <p class="overlay price">Starting at $45.95</p>
                <?php echo ChangeSeasonFlowerPic() ?>
            </article>
        </section>

        <section class="popular">
            <article class="products">
                <div class="indexheadline">
                    <h2>Our Most Popular Flowers</h2>
                    <p><a href="bouquet.php">Browse All Fresh Flowers</a></p>
                </div>

                <ul class="indexcontent">
                    <?php 
                        
                        $result12 = $db->query("SELECT * FROM flowers ORDER BY FSold DESC LIMIT 3");
                        while ($row = $result12->fetch_assoc()) 
                        {
                            if (isset($row["FImg"])) //checks if the variable has a value
                            {
                                if (strpos($row['FImg'], " "))  //if there is more then one
                                {
                                    $img = explode(" ", $row["FImg"])[0];
                                }
                                else //if there is 1 pic
                                {
                                    $img = $row['FImg'];
                                }
                            }
                            else // if there is no pic
                            {
                                $img = "imagecomingsoon.png";
                            }
                            
                            //used for calculating the price of flowers per 10
                            if (isset($row['FPrice'])) 
                            {
                                //calculates the full price
                                $FullPrice= $row['FPrice'] * 10;
                                //calculates Percentage of the full price
                                $RabatPercentage = ($percentage / 100) * $FullPrice;
                                //calculates the price with the discount
                                $FlowerPrice = $FullPrice - $RabatPercentage;
                            }
                            ?>
                            <li>
                                <a href="flwrdetails.php?FID=<?php echo $row['FID']?>">
                                    <img src="<?php echo 'img/'.$img ?>" alt="<?php echo $row['FName'] ?>">
                                    <h4>10 <?php echo $row['FName'] ?></h4>
                                    <p>From $<?php echo $FlowerPrice?></p>
                                </a>
                            </li>


                        <?php 
                        }
                        ?> 

                    
                </ul>
            </article>
        </section>


        <section class="bouqets">
            <article class="products">
                <div class="indexheadline">
                    <h2>Bouquets & Arrangements</h2>
                    <p><a href="arrangements.php">Browse All Arrangements</a></p>
                </div>

                <ul class="indexcontent">

                <?php 
                        
                        $result12 = $db->query("SELECT * FROM arrangements ORDER BY id ASC");
                        while ($row = $result12->fetch_assoc()) 
                        {
                            if ( $randNr1 == $row['id'] || $randNr2 == $row['id'] || $randNr3 == $row['id'] || $randNr4 == $row['id']) 
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
                                        <h4><?php echo $row['title'] ?></h4>
                                        <p>From $<?php echo $row['price']?></p>
                                    </a>
                                </li>


                        <?php 
                            }
                        }
                        ?> 

                </ul>
            </article>
        </section>


        <section class="specials">
            <article class="products">
                <div class="indexheadline">
                    <h2>Something Special</h2>
                    <p><a href="bouquet.php">Browse All Fresh Flowers</a></p>
                </div>
            
                <ul class="indexcontent">
                    <li>
                        <a href="bouquet.php">
                            <p class="overlay feature">Create Your Own Bouquet</p>
                            <p class="overlay desc">Choose the flowers you want, and our designers will create a custom arrangement! <span class="price">Bouquets from $29.95</span></p>
                            <img src="img/700_2_tulip_field_154321412.jpg" alt="Custom Bouquet">
                        </a>
                    </li>
                    
                    <li>
                        <a href="arrangements.php">
                            <p class="overlay feature">Live Plants Keep Giving</p>
                            <p class="overlay price">Starting at $19.95</p>
                            <img src="img/700_2_maidenhair_fern_166585539.jpg" alt="Maidenhair Fern">
                        </a>
                        <a href="arrangements.php">
                            <p class="overlay feature">Seasonal Specials</p>
                            <p class="overlay price">Starting at $24.95</p>
                            <?php echo ChangeMonthFlowerPic();?>
                        </a>
                    </li>
                </ul>
            </article>
        </section>

    </main>

    <?php include "includes/footer.php"; ?>

</body>
</html>