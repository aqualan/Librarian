<?php 
$search =  htmlspecialchars($_POST['book']);

echo $search;
//$answer = "./var/www/html/callnum.sh \"http://franklin.library.upenn.edu/record.html?q=build&id=FRANKLIN_3931630&\""



$sh = "/var/www/html/callnum.sh ";

$escapeSearch = escapeshellcmd($search);
$escapeSh = escapeshellcmd($sh);

$Book = $escapeSh . $escapeSearch;

$output = shell_exec($Book);

echo $output;

?>