<form action="t12z7.php" method="POST">
	введіть прізвище вчителя
	<input type="text" name="str">
	<input type="submit" name="k" value="знайти">
</form>
<?
if(isset($_POST["str"])){
	
	$str=trim(strip_tags($_POST["str"]));
	unset($_POST["str"]);
	$str=big_first_char_str($str);

	require_once "config.php";
	require_once "start.php";

	$query="SELECT * FROM firma WHERE lastname='$str'";
	$tab=mysql_query($query);
	$tak=false;
	while($row=mysql_fetch_array($tab)){
		echo "<br>Номер у базі даних: <b>".$row['id']."</b><br>"; 
		echo "ім'я: <b>".$row['name']."</b><br>"; 
		echo "прізвище: <b>".$row['lastname']."</b><br>"; 
		echo "посада: <b>".$row['post']."</b><br>";
		$tak=true;
	}
	if(!$tak){
		echo "Нікого не знайдено."; 
	}
	
}

function big_first_char_str($r){
	$lenstr=mb_strlen($r,"UTF-8");
	$first_char=mb_substr($r,0,1,"UTF-8");
	$big_first_char=mb_strtoupper($first_char,"UTF-8");
	$r=$big_first_char.mb_substr($r,1,$lenstr-1,"UTF-8");
	return $r; 
}
?>




