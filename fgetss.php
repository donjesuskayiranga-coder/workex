<?php
//reads a line and removes html tags.
//rewind for moving the file pointer to the beginning of the filed
//fgets was removed and strip_tags was added to remove html tags from the line read from the file
$file = 'check.html';
$handle= fopen($file, "r");
if ($handle !==false) {
    while (($line = fgets($handle)) !== false) {
        
        echo strip_tags($line)  .  "<br>";
    }
  fclose($handle);
}
?>