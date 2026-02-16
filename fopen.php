<?php

//fopen opens or creates a file and returns a file pointre resource on success or false on failure
//"r" - read only
//"w" - write only (write only (creates or overwrites a file))
//"a" - append 


$file = "don.text";
$handle= fopen("$file", "r");

if ($handle) {
    echo "File opened successfully.";
    
}
else {
    echo "Error opening file.";

}
?>
