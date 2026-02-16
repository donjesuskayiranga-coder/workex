<?php
$file = "don.txt";
$handle = fopen($file, "w" ,);


if ($handle) {
    fwrite($handle, "Hello, Don Jesus how are u doing?");
    fclose($handle);
    echo "Data written to file successfully.";
}
?>

