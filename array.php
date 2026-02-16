<?php

$movie[0] = "the lord of the rings";
$movie[1] = "the hobbit";
$movie[2] = "the silmarillion";
$movie[3] ="the children of hurin";
echo $movie[3];
$movie[3] = " that's it  bro!";
echo $movie[3];
$student = array("Amit", "Raj", "sureh", "Rohit", "sunil");
foreach($student as $value){
  echo $value . "<br>";
  //var_dump($student);
}
echo $student[0];
echo count($student);
echo count($movie);
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
echo $numbers[0]; "<br>";


?>