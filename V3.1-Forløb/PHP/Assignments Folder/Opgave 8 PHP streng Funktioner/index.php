<?php 
$theWord = "fox";
$string = "the quick brown fox jumped over the lazy dog";
$email = "halu@aspit.dk";
$randomString = "QWERTYUIOPLKJHGFDSAZXCVBNMqwertyuioplkjhgfdsazxcvbnm1234567890";
$palindromeWord = "lol";

function password_generate($lengthOfPassword, $passString)
{
    return substr(str_shuffle($passString), 0, $lengthOfPassword);
}

function Check_Palindrome($word)
{
    if($word == strrev($word))
    {
        return "ordet er Palindrome";
    }
    else
    {
        return "ordet er ikke Palindrome";
    }
}

?>

<!doctype html>
<html lang="en">
	<head>
		
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Opgave 8</title>
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	<body class="Container">
      
    <p><?php echo $string?></p>
    <p><?php echo  strtoupper($string)?></p>
    <p><?php echo ucfirst($string)?></p>
    <p><?php echo ucwords($string)?></p>
    
    <?php 
        if(strpos($string, $theWord) !== false)
        {
            echo "ordet findes i strengen";
        }
        else
        {
            echo "ordet findes ikke i strengen";
        }
    ?>

    <?php 
        $email = substr($email, 0, strpos($email, "@"));
        
    ?>
    <p><?php echo $email?></p>

    <p><?php echo password_generate(10, $randomString)?></p>

    <p><?php echo Check_Palindrome($palindromeWord)?></p>

	</body>
</html>