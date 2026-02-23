<?php
//deletes a file

$file = "example.txt";
if (unlink($file)) {
    echo "File deleted successfully.";
} else {
    echo "cannot delete a file.";
}
?>