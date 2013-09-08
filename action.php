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

$numtag_arr = explode(".", $output, 2);

// *** TODO: PI NEEDS A SPECIAL TAG BECAUSE PHP IS STUPID.

// Number after tag.
$num = preg_replace("/[^0-9]/","",$numtag_arr[0]);

// Item tag; e.g. PL/PT/etc.
$tag = preg_replace("/[^A-Z]/","",$numtag_arr[0]);

$title_arr = explode(",", $output, 3);
$title = $title_arr[2];

$location_data = $tag($num);

// Shelf location: northern/middle/southern
$shelf = preg_replace("/[^A-Z]/", "", $location_data);

// Row number
$rownum = preg_replace("/[^[0-9]/", "", $location_data);

echo $rownum;
echo $shelf;
echo $title;

?>