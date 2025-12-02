<?php
$students = array("Suha","Shifna","Fathima","Beema","Ciyana","Ameera");
echo "<h3>Array before sorting:</h3>";
print_r($students);
echo "<br><br>";
asort($students);
echo "<h3>Array in ascending order(asort):</h3>";
print_r($students);
echo "<br><br>";
arsort($students);
echo "<h3>Array in descending order(arsort):</h3>";
print_r($students);
?>








