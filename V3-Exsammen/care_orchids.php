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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hansel & Petal</title>
</head>

<body class="content">

    <?php include "includes/header.php"; ?>

    <main class="careorchids">
        <section class="careorchidsleft">
            <article>
                <h1>Caring for Orchids</h1>
                <h2>So They Will Bloom Year After Year</h2>
                
                <p>Orchids need six things to bloom. Make certain you know what type of orchid you have, then start with these basic care guidelines:</p>
                <ul class="list">
                    <li>Light</li>
                    <li>Water</li>
                    <li>Fertilizer</li>
                    <li>Air movement</li>
                    <li>Humidity</li>
                    <li>Proper temperatures</li>
                </ul>
            </article>


            <article class="accordion" >
                <ul id="accordion">

                    <li class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                <h3>Provide the appropriate amount of light</h3>
                            </a>
                        </div>
                        
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">

                            <ul class="card-body">

                                <p>Insufficient light is one the chief causes of orchids failing to bloom. Different kinds of orchids need different levels of light. If an orchid's leaves are light green, it is probably receiving enough light to bloom. Dark green leaves may indicate that the plant needs brighter light.</p>
                                
                                <li>Some kinds, such as Phalaenopsis and Paphiopedilum, can do 
                                    well under artificial lights.  Flourescent lights work well, and are 
                                    energy efficient.  Keep the lights 6-8 in/15-20 cm above the plants, but
                                    check that the bulbs do not burn leaves.
                                </li>

                                <li>Some orchids require bright light, but no direct sun. Orchids
                                    such as Phalaenopsis and Paphiopedilum live as epiphytes in lower parts
                                    of the forest. Trees and clouds block the direct rays of the sun. 
                                    Direct sun can cause sunburn on the leaves, leaving large dead spots. 
                                    Give these bright shade instead.
                                </li>

                                <li>Many orchids can handle some direct sun. Morning sun is 
                                    usually best; most need protection from direct midday sun and hot 
                                    afternoon sun. These include Cattleyas, Dendrobiums, Laelias, and 
                                    Oncidiums.
                                </li>

                                <li>Orchids that grow at the tops of trees and in other exposed 
                                    conditions can handle full sun. These include Vandas and some 
                                    Epidendrums.
                                </li>

                                <li>In wintertime when the sun is lower in the sky, many orchids 
                                    can handle brighter light. Be sure to move them back into more shade in 
                                    springtime.
                                </li>

                                <li>Plants moved into brighter light need a few weeks of 
                                    adjustment so that their leaves do not sunburn. Gradually introduce the 
                                    plant to brighter light, and make sure it receives adequate water and 
                                    humidity.
                                </li>
                                
                            </ul>

                        </div>

                    </li>

                    <li class="card">
                        
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                <h3>Remember to water as needed</h3>
                            </a>
                        </div>

                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">

                                <p>Over watering is probably the most common cause of failure with orchids. Orchids rot when they are soggy, and mushy or yellow leaves can be a sign of over watering. Water thoroughly, let the flowerpot drain completely, and dry out before watering again.</p>
                                
                                <h4>Tips for Proper Orchid Watering</h4>
                                <p>Imagine how a tropical rainstorm would soak an orchid, drenching it for minutes or hours. A quick splash of water does not give the plant time to absorb enough. Soak your orchid in a bucket or large container so its roots have time to absorb water and fertilizer. Place it in the bowl or container and fill it to the top level of the pot. Let it sit in the water for about 15 minutes. Do not leave it soaking too long, because the roots also need oxygen.</p>
                                
                                <p>Be sure the water drains thoroughly out of the pot! If part of the plant turns to mush or turns black, you have probably over watered or let the orchid pot sit in water. If the pot sits in a tray, empty the tray after watering. Sogginess causes rot. In their natural environments, orchids are air plants that never sit in water. Germs and other microorganisms that grow in stagnant water can cause orchid roots to quickly die.</p>
                                
                                <ul>
                                    <li>If you are not sure whether or not to water, stick your finger about 1 inch/2.5 cm in the potting media. You may find that even though the top is dry, below the surface it is still damp.</li>
                                    <li>Another way to determine whether or not to water is to feel the weight that water adds to the pot. Lift the orchid pot after you have watered it to feel how heavy it is when wet. Every few days lift it until it feels light. The lighter weight indicates that it is dry and needs water.</li>
                                    <li>Some orchids, such as Masdevallias, need to be watered every day. Others, such as Cattleyas, only need to be watered once every two weeks. Most kinds of orchids, including Phalaenopsis, Paphiopedilums, Oncidiums, and Dendrobiums, fall somewhere in between, requiring 2 or 3 waterings a week.</li>
                                    <li>Use room temperature water. If your local tap-water has lots of impurities or chemicals, use rainwater or filtered water.</li>
                                    <li>When watering your orchid, the water will run right through the pot. This is because potting media used to grow orchids, like bark and moss, does not hold water the same way that soil does.</li>
                                    <li>Small pots dry out faster than large ones.</li>
                                    <li>Some orchids appreciate a dry spell when they are dormant in the winter, and will not bloom without a cooler rest. During dormancy, depending on how quickly they dry out, they may only need water once or twice a month. Do not let them dry out completely, and make sure there is still high humidity.</li>
                                    <li>At least once a month, flush out the pot with running water for a few moments to clean out accumulated fertilizer residues.</li>
                                    <li>Mounted orchids may need water several times a day when it is warm.</li>
                                </ul>

                            </div>
                        </div>
                    </li>

                    <li class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                <h3>Fertilize regularly</h3>
                            </a>
                        </div>
                        
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Orchids need fertilizer to bloom. It's better to under-fertilize than over-fertilize. A common routine is to fertilize every 2 weeks in spring and summer, and once a month in the fall and winter. Orchid experts are constantly debating how to best fertilize. In the wild, roots and leaves absorb nutrients when rainwater washes plant and animal debris over them. Orchids in pots receive some nutrients as their potting media slowly breaks down, but this may not give them all they need.</p>
                                
                                <ul>
                                    <li>The easiest method to fertilize orchids is to use a balanced fertilizer in the spring, summer, and fall. "Balanced" means that the three numbers on the fertilizer are the same, or close to it, like 20-20-20. Follow the instructions on the label.</li>
                                    <li>Some growers prefer to give their orchids a high nitrogen fertilizer formula in the spring and summer, like 30-10-10. Then they switch to a low nitrogen formula, like 10-30-30, in the fall. Always follow the instructions on the label.</li>
                                    <li>If you do not have orchid food, regular plant food that is diluted is usually a good substitute.  Only use 1/4 - 1/2 the recommended amount of regular plant food.</li>
                                    <li>Besides nitrogen, potassium, and phosphorus, orchids need small quantities of sulfur, magnesium, calcium, iron, manganese, zinc, copper, boron, chlorine, cobalt, and molybdenum. These are included in many fertilizers - check the label.</li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse4">
                                <h3>Keep the air moving</h3>
                            </a>
                        </div>

                        <div id="collapse4" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <h4>Air Movement Is Important</h4>
                                <p>We may think of damp jungles and forests as places where the air is still, but in nature orchid leaves and roots are exposed to both mild breezes and strong winds. Keep plants near an open window or a fan to provide some gentle air movement. Be careful not to blow all the humidity away. Stagnant air will encourage pests and germs that can kill a plant. Orchids such as Masdevallias and Odontoglossums need constant cool, moist breezes.</p>
                                
                                <h4>Orchids Need Good Air Quality</h4>
                                <p>Some orchids may be sensitive to airborne pollutants, or sensitive to ethylene. Ethylene is an odorless, invisible gas that comes from ripening fruit or some kinds of smoke, including cigarette smoke. Keep plants away from ripening fruit, stoves, and heaters. Regular air movement will help. If you live in a polluted area, you may want to experiment with different kinds of orchids to find the ones that can survive with poor air quality.</p>
                            
                            </div>
                        </div>
                    </li>
                    
                    <li class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse5">
                                <h3>Keep humidity levels up</h3>
                            </a>
                        </div>
                        
                        <div id="collapse5" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Humidity measures the amount of water vapor circulating in the air. Orchids need high humidity (50%-75%) all the time. Plant leaves have microscopic openings that "breathe in" water vapor and oxygen. Even during winter dormancy, orchids still want moderate humidity around their leaves and roots. As temperatures rise, orchids need increasing humidity to cope with the heat. Direct sun can heat up an area very quickly; the afternoon sun especially can dry out the air. Wind also dries out plant leaves, and even though they enjoy the air movement, this must be balanced with high humidity.</p>
                                
                                <h4>5 Methods to Raise Humidity:</h4>
                                <ul class="list">
                                    <li>Mist the leaves with a spray bottle to raise humidity levels. Avoid misting with tap water, since chemicals in it may damage the leaves. Use rainwater or purified water instead.</li>
                                    <li>Place a tray of pebbles and water under the pot to raise humidity. Never let the flowerpot sit in water; instead, raise the pot on pebbles to keep it above the water level. If the pot sits in water, the roots will rot. Be sure to change the water at least twice a week to keep it clean and prevent mosquitoes.</li>
                                    <li>Put the orchid near a fountain. The moving water will evaporate and raise the humidity nearby.</li>
                                    <li>Group several orchids together. During the day, leaves transpire and release water vapor, humidifying the air. Plants in a group can create a small, humid area around one another.</li>
                                    <li>Use a humidifier. Only use the kind that blows cool mist, not steam.</li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse6">
                                <h3>Provide the appropriate temperatures</h3>
                            </a>
                        </div>
                        
                        <div id="collapse6" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>There are three temperature zones for orchids, and each type of orchid has an ideal temperature zone.</p>
                                <ul>
                                    <li>Warm growers need daytime temperatures approximately 70°-85°F /20°- 30°C. They enjoy a slight temperature drop at night, but should not go below 65°F /18°C. Warm growing orchids include Phalaenopsis, Vandas, Cattleyas, and most Dendrobiums.</li>
                                    <li>Intermediate growers need temperatures approximately 60°-75°F /15°- 25°C during the day, with a drop of 5°- 15°F/3°- 8°C during the night. Intermediate orchids include Oncidiums, Paphiopedilums, and many Epidendrums.</li>
                                    <li>Cool growers need temperatures approximately 50°- 70°F/10°-20°C, with a 10°- 20°F/5°- 10°C temperature drop at night. Many can handle temperatures as low as 40°F /4°C. Cool-growing Cymbidiums can handle a light freeze. Other cool growing orchids include Masdevallias, Miltoniopsis, and Odontoglossums.</li>
                                </ul>
                                
                                <h4>Orchids Need a Temperature Drop at Night</h4>
                                <p>All orchids require lower nighttime temperatures. Some, like Phalaenopsis, need just a 5°F/3°C drop, while others, like Cymbidiums, need as much as 20°F/10°C. These temperature changes allow daily cycles of chemical reactions to happen within the plant.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </article>
        </section>

        <section class="careorchidsright">
            <article>
                <h2>Orchids in stock:</h2>
                <ul>
                    <?php 
                        $searchFlower = "Orchid";
                        $result12 = $db->query("SELECT * FROM flowers WHERE FClass='Orchid' LIMIT 5");
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
                            
                            ?>
                            <li>
                                <a href="flwrdetails.php?FID=<?php echo $row['FID']?>">
                                    <img src="<?php echo 'img/'.$img ?>" alt="<?php echo $row['FName'] ?>">
                                    <h3><?php echo $row['FName'] ?></h3>
                                    <p>From $<?php echo $row['FPrice']?></p>
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

    
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>