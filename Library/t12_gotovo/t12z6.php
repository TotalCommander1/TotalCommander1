<?
require_once "config.php";
require_once "start.php";

$str="учень";
$query="SELECT * FROM firma WHERE post='$str'";
$tab=mysql_query($query);
$i=1;
while($row=mysql_fetch_array($tab)){
	$student[$i]['id']=$row['id'];
	$student[$i]['name']=$row['name'];
	$student[$i]['lastname']=$row['lastname'];
	$i++;
}
echo"<table align='center' width='500' border='1'>";
echo"
	<tr>
		<th width='25'>id</th>
		<th>Ім'я</th>
		<th>Прізвище</th> 
	</tr> 
	";
	
for($i=1;$i<=count($student);$i++){
	echo"
		<tr>
			<td>".$student[$i]['id']."</td>
			<td>".$student[$i]['name']."</td>
			<td>".$student[$i]['lastname']."</td>
		</tr>
		";
}
?>