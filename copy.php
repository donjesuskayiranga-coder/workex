<?php
$source = "don.txt";

$destination = "don.text";

if(copy($source, $destination)) {
    echo "File copied successfully.";
} else {
    echo "Failed to copy file.";

}
?>