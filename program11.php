<?php
$indianplayers = array("Virat Kohli" , "M.S Dhoni" , "Sachin Tendulker" , "Ravindra Jadeja" , "Mohammed Shami");
echo "<table border='1'>
	<tr>
	 <th>SL No.</th>
	 <th>palyer name</th>
	</tr>";
$i=1;
foreach($indianplayers as $player)
{
echo "<tr>
	 <td>$i</td>
	 <td>$player</td>
      </tr>";
      $i++;
}

echo "</table>";
?>	
	

