<?php

//reads one line from a file 

$file = "don.txt";
$handle = fopen($file, "r");

if ($handle) {
    while (!feof($handle)) {
        $line = fgets($handle);
        echo $line . "<br>";

    }
    fclose($handle);
}
?>