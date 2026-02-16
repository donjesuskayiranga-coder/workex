<?php
$file = "file.php";

if (is_file($file)) {
    echo "$file is a file.";
} else {
    echo "$file is not a file.";

}
?>