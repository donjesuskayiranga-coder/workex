<?php

$file = "don.text";
if (file_exists($file)) {
    $content = file_get_contents($file);
    echo $content;
}
else {
    echo "File does not exist.";
}
?>