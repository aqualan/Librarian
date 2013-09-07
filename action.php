<?php
// What to look for
$search =  htmlspecialchars($_POST['book']);
//echo $search;
// Read from file
$lines = file('library.txt');
foreach($lines as $line)
{
  // Check if the line contains the string we're looking for, and print if it does
  if(strpos($line, $search) !== false)
  {
    echo $line;
    break 1;
  }
}
