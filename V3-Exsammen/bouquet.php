<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    
    if(isset($_POST))
    {
        $_SESSION["Post-Data"] = $_POST;
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

    <main class="careorchids">
        <section>
            <h1>Build a Bouquet</h1>
            <h2>From Our Fresh Selection of Flowers</h2>
            <p>Choose the flowers you want, choose a color if available, and choose the number of each for your bouquet.</p>

            
            <form action="order.php" method="post" class="bouquet">
                <fieldset>
                    <div>
                        <img src="img/160_calla_blush_160337318.jpg" alt="Calla Lilies">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=1" target="_blank">Calla Lilies</a></h4>
                        <p>$3.00 per stem</p>
                        <div class="color">
                            <label for="colorCL">Color</label>
                            <!-- Blush, Yellow, Pink, Purple -->
                            <select name="color_Calla_Lilies" id="colorCL">
                                <option selected value="160_calla_blush_160337318">Blush</option>
                                <option value="160_calla_yellow_153712017">Yellow</option>
                                <option value="160_calla_pink_119602389">Pink</option>
                                <option value="160_calla_purple_162814062">Purple</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyCL">Quantity</label>
                            <input value="0" name="qty_Calla_Lilies" id="qtyCL" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Calla_Lilies" value="3">
                    </div>
                </fieldset>



                <fieldset>
                    <div>    
                        <img src="img/160_sunflower_146748795.jpg" alt="Sunflowers">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=2" target="_blank">Sunflowers</a></h4>
                        <p>$3.00 per stem</p>
                        <div class="color invisible">
                            <label>Dummy</label>
                            <select>
                                <option selected>Dummy</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyS">Quantity</label>
                            <input value="0" name="qty_Sunflowers" id="qtyS" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Sunflowers" value="3">
                        <input type="hidden" name="image_Sunflowers" value="160_sunflower_146748795">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_iris_purple_121549009.jpg" alt="Iris">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=3" target="_blank">Iris</a></h4>
                        <p>$2.00 per stem</p>
                        <div class="color invisible">
                            <label>Dummy</label>
                            <select>
                                <option selected>Dummy</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyI">Quantity</label>
                            <input value="0" name="qty_Iris" id="qtyI" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Iris" value="2">
                        <input type="hidden" name="image_Iris" value="160_iris_purple_121549009">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_alstromeria_87519333.jpg" alt="Peruvian Lilies">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=4" target="_blank">Peruvian Lilies</a></h4>
                        <p>$2.00 per stem</p>
                        <div class="color invisible">
                            <label>Dummy</label>
                            <select>
                                <option selected>Dummy</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyPL">Quantity</label>
                            <input value="0" name="qty_Peruvian_Lilies" id="qtyPL" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Peruvian_Lilies" value="2">
                        <input type="hidden" name="image_Peruvian_Lilies" value="160_alstromeria_87519333">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_daffodil_122442732.jpg" alt="Daffodils">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=5" target="_blank">Daffodils</a></h4>
                        <p>$2.00 per stem</p>
                        <div class="color invisible">
                            <label>Dummy</label>
                            <select>
                                <option selected>Dummy</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyDN">Quantity</label>
                            <input value="0" name="qty_Daffodils_(Narcissus)" id="qtyDN" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Daffodils_(Narcissus)" value="2">
                        <input type="hidden" name="image_Daffodils_(Narcissus)" value="160_daffodil_122442732">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_gerbera_purple_146798391.jpg" alt="Gerbera">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=6" target="_blank">Gerbera</a></h4>
                        <p>$3.00 per stem</p>
                        <div class="color">
                            <label for="colorGD">Color</label>
                            <!-- Purple, Orange, Pink, Yellow -->
                            <select name="color_Gerbera_Daisies" id="colorGD">
                                <option selected value="160_gerbera_purple_146798391">Purple</option>
                                <option value="160_gerbera_orange_146798391">Orange</option>
                                <option value="160_gerbera_pink_146798391">Pink</option>
                                <option value="160_gerbera_yellow_146798391">Yellow</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyGD">Quantity</label>
                            <input value="0" name="qty_Gerbera_Daisies" id="qtyGD" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Gerbera_Daisies" value="3">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_dendrobium2_152158743.jpg" alt="Dendrobium">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=7" target="_blank">Dendrobium</a></h4>
                        <p>$4.00 per stem</p>
                        <div class="color invisible">
                            <label>Dummy</label>
                            <select>
                                <option selected>Dummy</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyDO">Quantity</label>
                            <input value="0" name="qty_Dendrobium_Orchid" id="qtyDO" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Dendrobium_Orchid" value="4">
                        <input type="hidden" name="image_Dendrobium_Orchid" value="160_dendrobium2_152158743">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_rose_pink_112277154.jpg" alt="Rose Pink">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=8" target="_blank">Roses</a></h4>
                        <p>$3.00 per stem</p>
                        <div class="color">
                            <label for="colorR">Color</label>
                            <select name="color_Roses" id="colorR">
                                <option selected value="160_rose_pink_112277154">Pink</option>
                                <option value="160_rose_peach_89153628">Peach</option>
                                <option value="160_rose_white_100291489">White</option>
                                <option value="160_rose_yellow_187406sdc">Yellow</option>
                                <option value="160_rose_red_92974998">Red</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyR">Quantity</label>
                            <input value="0" name="qty_Roses" id="qtyR" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Roses" value="3">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_lily_pink_160102549.jpg" alt="Lily Pink">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=9" target="_blank">Lilies</a></h4>
                        <p>$3.00 per stem</p>
                        <div class="color">
                            <label for="colorL">Color</label>
                            <select name="color_Lilies" id="colorL">
                                <option selected value="160_lily_pink_160102549">Pink</option>
                                <option value="160_lily_red_100751706">Red</option>
                                <option value="160_lily_white_118344285">White</option>
                                <option value="160_lily_yellow_153572772">Yellow</option>
                                <option value="160_lily_orange_134442518">Orange</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyL">Quantity</label>
                            <input value="0" name="qty_Lilies" id="qtyL" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Lilies" value="3">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_tulip_purple_160910481.jpg" alt="Tulip Purple">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=10" target="_blank">Tulips</a></h4>
                        <p>$2.00 per stem</p>
                        <div class="color">
                            <label for="colorT">Color</label>
                            <select name="color_Tulips" id="colorT">
                                <option selected value="160_tulip_purple_160910481">Purple</option>
                                <option value="160_tulip_yellow_166252946">Yellow</option>
                                <option value="160_tulip_golden_155462715">Golden</option>
                                <option value="160_tulip_pink_140450162">Pink</option>
                                <option value="160_tulip_red_91047474">Red</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyT">Quantity</label>
                            <input value="0" name="qty_Tulips" id="qtyT" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Tulips" value="2">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_lilac_157045915.jpg" alt="Lilac">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=11" target="_blank">Lilacs</a></h4>
                        <p>$4.00 per stem</p>
                        <div class="color invisible">
                            <label>Dummy</label>
                            <select>
                                <option selected>Dummy</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyLC">Quantity</label>
                            <input value="0" name="qty_Lilac" id="qtyLC" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Lilac" value="4">
                        <input type="hidden" name="image_Lilac" value="160_lilac_157045915">
                    </div>
                </fieldset>



                <fieldset>
                    <div>
                        <img src="img/160_daisy_white_159207232.jpg" alt="Daisy White">
                    </div>
                    <div>
                        <h4><a href="flwrdetails.php?FID=12" target="_blank">Daisies</a></h4>
                        <p>$1.00 per stem</p>
                        <div class="color invisible">
                            <label>Dummy</label>
                            <select>
                                <option selected>Dummy</option>
                            </select>
                        </div>
                        <div class="qty">
                            <label for="qtyD">Quantity</label>
                            <input value="0" name="qty_Daisies" id="qtyD" class="text" type="number">
                        </div>
                        <input type="hidden" name="cost_Daisies" value="1">
                        <input type="hidden" name="image_Daisies" value="160_daisy_white_159207232">
                    </div>
                </fieldset>


                <fieldset class="break"></fieldset>
                <input class="btn break" value="Add to Basket" type="submit" name="bouquet">


                
            </form>
        </section>
    </main>
    
    <?php include "includes/footer.php"; ?>
</body>
</html>