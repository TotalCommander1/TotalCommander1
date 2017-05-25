<?
require_once "config.php";
require_once "start.php";

$str="учень";
$query="SELECT * FROM firma WHERE post='$str' ORDER BY id DESC LIMIT 0,6";
$tab=mysql_query($query);
echo "<b>Шість останніх учнів, які додані в таблицю \"firma\":</b><br>";
while($row=mysql_fetch_array($tab)){
	echo $row['name']." ".$row['lastname']."<br>";	
} 
?>