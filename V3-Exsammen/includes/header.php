<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

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