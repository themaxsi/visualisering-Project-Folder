<?php 
    $productRow = $result-fetch_assoc();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>EDEA skates</title>
</head>
<html>
    <main>
        <h1><?php echo $productRow["PName"]?></h1>
        <div class="showProduct">
            
        </div>



    </main>
</html>