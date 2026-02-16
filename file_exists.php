<?php

//checks if file or folder exists

$folder = "factorial.php";

if (file_exists($folder)) {
    echo "$folder exists.";

}
else {
    echo "$folder does not exist.";
}
?>