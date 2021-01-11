<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
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

    <header>
        <div class="quicklinks">
            <a href="index.php"><img src="img/logo.png" alt="Hansel and Petal logo"></a>
            <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="order.php">View My Order</a></li>
                <li><a href="#">Customer Service</a></li>
                <li class="offer">FREE Shipping on orders over $75.00!</li>
            </ul>
        </div>      
        <nav class="top">
            <ul>
                <li><a href="arrangements.php">Arrangements</a></li>
                <li><a href="bouquet.php">Build a bouquet</a></li>
                <li class="parent"><a href="#">Care tips</a>
                    <ul>
                        <li><a href="care_orchids.php">Orchids</a></li>
                    </ul>
                </li>
                <li><a href="designers.php">Our designers</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="featured">
            <h1>Beautiful Flowers, Artfully Arranged</h1>
            <article>
                <p class="overlay header">Beautiful arrangements for any occasion</p>
                <p class="overlay price">Starting at $45.95</p>
                <img src="img/980_white_rose_mix_166610678.jpg" alt="White Rose Arrangement">
            </article>
        </section>

        <section class="popular">
            <article class="products">
                <div class="indexheadline">
                    <h2>Our Most Popular Flowers</h2>
                    <p><a href="bouquet.php">Browse All Fresh Flowers</a></p>
                </div>
                <ul class="indexcontent">
                    <li>
                        <a href="#">
                            <img src="img/200_red_yellow_roses_119752732.jpg" alt="Red Yellow Roses Mix">
                            <h4>10 Roses</h4>
                            <p>From $28.50</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_irises_121549009.jpg" alt="Purple Irises">
                            <h4>10 Irises</h4>
                            <p>From $19.00</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_golden_tulips_148182635.jpg" alt="Golden Tulips">
                            <h4>10 Tulips</h4>
                            <p>From $19.00</p>
                        </a>
                    </li>
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
                    <li>
                        <a href="#">
                            <img src="img/200_bouquet_watering_can_orange_163066621.jpg" alt="Watering Can">
                            <h4>It's Raining Flowers</h4>
                            <p>From $19.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_arrangement_94972439.jpg" alt="Sunflower Bouquet">
                            <h4>Thinking of You</h4>
                            <p>From $35.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_purple_daisy_rose104274224.jpg" alt="Purple Daisy Bouquet">
                            <h4>Purple Galore</h4>
                            <p>From $21.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_arrangement_163066655.jpg" alt="Bucket o' Mums">
                            <h4>Polka Dot Pail</h4>
                            <p>From $25.95</p>
                        </a>
                    </li>
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
                            <img src="img/700_tulips_daffodils_163271740.jpg" alt="Custom Bouquet">
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
                            <img src="img/700_2_tulip_field_154321412.jpg" alt="Fresh Tulips">
                        </a>
                    </li>
                </ul>
            </article>
        </section>

    </main>

    <footer>
    <div class="footercontent">
        <div>
            <a href="arrangements.php">Arrangements</a>
            <a href="shop.php">Live Plants</a>
            <a href="bouquet.php">Build-a-Bouquet</a>
            <a href="#">Special Events</a>
            <a href="#">Care Tips</a>
            <a href="#">Eco-Conscious</a>
            <a href="designers.php">Our Designers</a>
        </div>

        <div>
            <a href="#">My Account</a>
            <a href="#">Order Status</a>
            <a href="#">Customer Service</a>
            <a href="#">Fresh Flower Guarantee</a>
            <a href="#">Shipping Information</a>


        </div>

        <div>
            <a href="#">About Us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms &amp; Conditions</a>
            <p>Follow us on SoMe:</p>
            <div class="footerSoMe">
                <a href="#"><img src="img/facebookIcon-bw.png" alt="Facebook logo"></a>
                <a href="#"><img src="img/instagramIcon-bw.png" alt="Instagram logo"></a>
                <a href="#"><img src="img/twitterIcon-bw.png" alt="Twitter logo"></a>
                <a href="#"><img src="img/youtubeIcon-bw.png" alt="YouTube logo"></a>
            </div>
        </div>

        <img src="img/logo.png" alt="Hansel and Petal" height="124" width="207">
        </div>
        <div class="footercopy"><a href="index.php">© 2020 Hansel and Petal</a></div>
    </footer>

</body>
</html>