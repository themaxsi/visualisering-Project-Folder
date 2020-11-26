<?php 
$elev = array("hans", "fred", "karsten");

$find = "fred";

$tempMonths1 = array
(
);
$tempMonths2 = array
(	
);

$months = array
(
	"februar" => 28,
	"april" => 30,
	"juni" => 30,
	"september" => 30,
	"november" => 30,
	"januar" => 31,
	"marts" => 31,
	"maj" => 31,
	"juli" => 31,
	"august" => 31,
	"oktober" => 31,
	"december" => 31
);

$teachers = array
(
	array
	(
		"fornavn" => "Hanne",
		"efternavn" => "Lund",
		"fag" => "Visualisering"
	),
	array
	(
		"fornavn" => "Jens",
		"efternavn" => "Clausen",
		"fag" => "Softwarekonstruktion"
	),
	array
	(
		"fornavn" => "Ronni",
		"efternavn" => "Hansen",
		"fag" => "Teknik"
	),
	array
	(
		"fornavn" => "Jonas",
		"efternavn" => "Rasmussen",
		"fag" => "AspIT-Lab"
	)

);

function Search($val, $array)
{
	$temp1 = -1;
	foreach ($array as $key => $value) 
	{
		if ($val != $value) 
		{
			$temp1++;
		}
		else
		{

		}

	}
	
	if ($temp1 < 3)
	{
		return("<p>{$val} is in the array at place {$temp1}</p>");
	}
	else
	{
		return("<p> {$val} is not in the array</p>");
	}
	
}
function SearchEasy($val, $array)
{
	return(array_search($val, $array));
}
function SortMonths($MonthArray, $tm1)
{
	

	foreach ($MonthArray as $key => $value) 
	{
		if ($value <= 30)
		{
			$tm1 += [$key => $value];
		}
		
	}
	return $tm1;
}
function SortMonths1($MonthArray, $tm2)
{
	foreach ($MonthArray as $key => $value) 
	{
		if ($value > 30)
		{
			$tm2 += [$key => $value];
		}
	}
	return $tm2;
}


function ShowArrayT($arrayT)
{
	$last = count($arrayT) - 1;
	foreach ($arrayT as $i => $row) 
	{
		$isFirst = ($i == 0);
		$isLast = ($i == $last);

		echo  $row['fornavn'], " - ", $row['efternavn'], " - ", $row['fag'], "<br>" ;
	}
}





?>

<!doctype html>
<html lang="en">
	<head>
		
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Opgave 10</title>
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	<body class="Container">
   
		<?php echo Search($find, $elev) ?>

		<p><?php echo $find ?> is at place <?php echo SearchEasy($find, $elev)?> in array</p>


		<pre><?php print_r($months)?></pre>

		<div class="test">
			<pre><?php print_r(SortMonths($months, $tempMonths1)) ?></pre>
			<pre><?php print_r(SortMonths1($months, $tempMonths2))?></pre>
		</div>


		<pre><?php print_r($teachers)?></pre>

		<?php echo ShowArrayT($teachers) ?>


	</body>
</html>