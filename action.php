<?php

include 'locationsorting.php';
// n is the second token number.


$search =  htmlspecialchars($_POST['book']);

//echo $search;
//$answer = "./var/www/html/callnum.sh \"http://franklin.library.upenn.edu/record.html?q=build&id=FRANKLIN_3931630&\""

$sh = "/var/www/html/callnum.sh ";

$escapeSearch = escapeshellcmd($search);
$escapeSh = escapeshellcmd($sh);

$Book = $escapeSh . $escapeSearch;

$output = shell_exec($Book);

echo $output;

$arr = explode(".", $output, 2);

// *** TODO: PI NEEDS A SPECIAL TAG BECAUSE PHP IS STUPID.

// Number after tag.
$num = preg_replace("/[^0-9]/","",$arr[0]);

// Item tag; e.g. PL/PT/etc.
$tag = preg_replace("/[^A-Z]/","",$arr[0]);

$location_data = $tag($num);

// Shelf location: northern/middle/southern
$shelf = preg_replace("/[^A-Z]/", "", $location_data);

// Row number
$rownum = preg_replace("/[^[0-9]/", "", $location_data);

	
//echo $rownum;
//echo $shelf;

if($output != ",N/A"){
	header("Location: http://ec2-50-16-110-122.compute-1.amazonaws.com/foundbook.html");
{elseif($output == ",N/A"){
	header("Location: http://ec2-50-16-110-122.compute-1.amazonaws.com/booknotfound.html");
} else
	header("Location: http://ec2-50-16-110-122.compute-1.amazonaws.com/bookunavailable.html");

?>