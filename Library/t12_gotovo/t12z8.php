<?
	require_once "config.php";
	require_once "start.php";

	$query="SELECT * FROM firma WHERE post='учень'";
	$tab=mysql_query($query);
	$tak=false;
	while($row=mysql_fetch_array($tab)){
		$d=mb_strlen($row['lastname'],"UTF-8");
		$str=mb_substr($row['lastname'],$d-3,3,"UTF-8");
		if($str=="чук"){
			echo "<br>Номер у базі даних: <b>".$row['id']."</b><br>"; 
			echo "ім'я: <b>".$row['name']."</b><br>"; 
			echo "прізвище: <b>".$row['lastname']."</b><br>"; 
		}
	}
?>