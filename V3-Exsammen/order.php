<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_POST['cancel']) && $_POST['cancel'] == "Cancel Order")
    {
        session_destroy();
        header("Location:index.php");
    }
    if (isset($_POST['Confirm']) && $_POST['Confirm'] == "Confirm Order"  ) 
    {
        $_SESSION["Post-Data"] = $_SESSION;
        header("Location:index.php");

    }
    if(isset($_POST))
    {
        $_SESSION["Post-Data"] = $_POST;
    }
    

    print_r($_SESSION);

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
        <section>
            <h1>Your Order</h1>
            <p>Please check the details of your order.</p>
            
            <article class="orderdetails">

                <p class="header">&nbsp;</p>
                <p class="header">Item</p>
                <p class="header">Color</p>
                <p class="header">Quantity</p>
                <p class="header">Cost</p>

                <p><img src="img/160_calla_blush_160337318.jpg" alt="Calla Lilies"></p>
                <p><a href="flwrdetails.php?FID=1" target="_blank">Calla lilies</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['color_Calla_Lilies']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Calla_Lilies']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Calla_Lilies'] * $_SESSION['Post-Data']['qty_Calla_Lilies']?></p>

                <p><img src="img/160_sunflower_146748795.jpg" alt="Sunflowers"></p>
                <p><a href="flwrdetails.php?FID=2" target="_blank">Sunflowers</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['image_Sunflowers']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Sunflowers']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Sunflowers'] * $_SESSION['Post-Data']['qty_Sunflowers']?></p>

                <p><img src="img/160_iris_purple_121549009.jpg" alt="Iris"></p>
                <p><a href="flwrdetails.php?id=3" target="_blank">Iris</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['image_Iris']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Iris']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Iris'] * $_SESSION['Post-Data']['qty_Iris']?></p>

                <p><img src="img/160_alstromeria_87519333.jpg" alt="Peruvian Lilies"></p>
                <p><a href="flwrdetails.php?FID=4" target="_blank">Peruvian lilies</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['image_Peruvian_Lilies']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Peruvian_Lilies']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Peruvian_Lilies'] * $_SESSION['Post-Data']['qty_Peruvian_Lilies']?></p>

                <p><img src="img/160_daffodil_122442732.jpg" alt="Daffodils"></p>
                <p><a href="flwrdetails.php?id=5" target="_blank">Daffodils (Narcissus)</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['image_Daffodils_(Narcissus)']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Daffodils_(Narcissus)']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Daffodils_(Narcissus)'] * $_SESSION['Post-Data']['qty_Daffodils_(Narcissus)']?></p>


                <p><img src="img/160_gerbera_purple_146798391.jpg" alt="Gerbera"></p>
                <p><a href="flwrdetails.php?FID=6" target="_blank">Gerbera daisies</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['color_Gerbera_Daisies']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Gerbera_Daisies']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Gerbera_Daisies'] * $_SESSION['Post-Data']['qty_Gerbera_Daisies']?></p>


                <p><img src="img/160_dendrobium2_152158743.jpg" alt="Dendrobium"></p>
                <p><a href="flwrdetails.php?FID=7" target="_blank">Dendrobium orchids</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['image_Dendrobium_Orchid']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Dendrobium_Orchid']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Dendrobium_Orchid'] * $_SESSION['Post-Data']['qty_Dendrobium_Orchid']?></p>


                <p><img src="img/160_rose_red_92974998.jpg" alt="Rose Red"></p>
                <p><a href="flwrdetails.php?FID=8" target="_blank">Roses</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['color_Roses']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Roses']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Roses'] * $_SESSION['Post-Data']['qty_Roses']?></p>


                <p><img src="img/160_lily_pink_160102549.jpg" alt="Lily Pink"></p>
                <p><a href="flwrdetails.php?FID=9" target="_blank">Lilies</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['color_Lilies']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Lilies']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Lilies'] * $_SESSION['Post-Data']['qty_Lilies']?></p>


                <p><img src="img/160_tulip_purple_160910481.jpg" alt="Tulip Purple"></p>
                <p><a href="flwrdetails.php?FID=10" target="_blank">Tulips</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['color_Tulips']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Tulips']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Tulips'] * $_SESSION['Post-Data']['qty_Tulips']?></p>


                <p><img src="img/160_lilac_157045915.jpg" alt="Lilac"></p>
                <p><a href="flwrdetails.php?FID=11" target="_blank">Lilac</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['image_Lilac']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Lilac']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Lilac'] * $_SESSION['Post-Data']['qty_Lilac']?></p>


                <p><img src="img/160_daisy_white_159207232.jpg" alt="Daisy White"></p>
                <p><a href="flwrdetails.php?FID=12" target="_blank">Daisies</a></p>
                <p><img src="img/<?php echo $_SESSION['Post-Data']['image_Daisies']?>.jpg"></p>
                <p><?php echo $_SESSION['Post-Data']['qty_Daisies']?></p>
                <p>$<?php echo $_SESSION['Post-Data']['cost_Daisies'] * $_SESSION['Post-Data']['qty_Daisies']?></p>


                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Amount of Flowers <?php echo $_SESSION['Post-Data']['qty_Daisies'] + $_SESSION['Post-Data']['qty_Lilac'] + $_SESSION['Post-Data']['qty_Tulips'] + $_SESSION['Post-Data']['qty_Lilies'] + $_SESSION['Post-Data']['qty_Roses'] + $_SESSION['Post-Data']['qty_Dendrobium_Orchid'] + $_SESSION['Post-Data']['qty_Gerbera_Daisies'] + $_SESSION['Post-Data']['qty_Daffodils_(Narcissus)'] + $_SESSION['Post-Data']['qty_Peruvian_Lilies'] + $_SESSION['Post-Data']['qty_Iris'] + $_SESSION['Post-Data']['qty_Sunflowers'] + $_SESSION['Post-Data']['qty_Calla_Lilies'] ?> </p>
                <p>Full price $<?php echo ($_SESSION['Post-Data']['cost_Daisies'] * $_SESSION['Post-Data']['qty_Daisies']) + ($_SESSION['Post-Data']['cost_Lilac'] * $_SESSION['Post-Data']['qty_Lilac']) + ($_SESSION['Post-Data']['cost_Tulips'] * $_SESSION['Post-Data']['qty_Tulips']) + ($_SESSION['Post-Data']['cost_Lilies'] * $_SESSION['Post-Data']['qty_Lilies']) + ($_SESSION['Post-Data']['cost_Roses'] * $_SESSION['Post-Data']['qty_Roses']) + ($_SESSION['Post-Data']['cost_Dendrobium_Orchid'] * $_SESSION['Post-Data']['qty_Dendrobium_Orchid']) + ($_SESSION['Post-Data']['cost_Gerbera_Daisies'] * $_SESSION['Post-Data']['qty_Gerbera_Daisies']) + ($_SESSION['Post-Data']['cost_Daffodils_(Narcissus)'] * $_SESSION['Post-Data']['qty_Daffodils_(Narcissus)']) + ($_SESSION['Post-Data']['cost_Peruvian_Lilies'] * $_SESSION['Post-Data']['qty_Peruvian_Lilies']) + ($_SESSION['Post-Data']['cost_Iris'] * $_SESSION['Post-Data']['qty_Iris']) + ($_SESSION['Post-Data']['cost_Sunflowers'] * $_SESSION['Post-Data']['qty_Sunflowers']) + ($_SESSION['Post-Data']['cost_Calla_Lilies'] * $_SESSION['Post-Data']['qty_Calla_Lilies'])?></p>

                <div class="orderLine"></div>
                <div class="orderLine"></div>
                <div class="orderLine"></div>
                <div class="orderLine"></div>
                <div class="orderLine"></div>
            </article>

            <article class="orderconfirm">
                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                    <input class="btn" value="Cancel Order" name="cancel" id="cancel" type="submit">
                    <input class="btn confirm" name="Confirm" value="Confirm Order" type="submit">
                </form>
            </article>
        </section>
    </main>

    <?php include "includes/footer.php"; ?>
</body>
</html>