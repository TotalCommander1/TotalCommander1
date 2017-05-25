<form action="t12z9.php" method="POST">
	введіть частину імені
	<input type="text" name="str">
	<input type="submit" name="k" value="знайти">
</form>
<?
if(isset($_POST["str"])){
	
	$str=trim(strip_tags($_POST["str"]));
	unset($_POST["str"]);
	
	$str=mb_strtolower($str,"UTF-8");
	
	require_once "config.php";
	require_once "start.php"; 
	
	$query="SELECT * FROM firma";
	$tab=mysql_query($query);
	$tak=false;
	while($row=mysql_fetch_array($tab)){
		$name=mb_strtolower($row['name'],"UTF-8");
		if(strstr($name,$str)){
			echo "<br>Номер у базі даних: <b>".$row['id']."</b><br>"; 
			echo "ім'я: <b>".$row['name']."</b><br>"; 
			echo "прізвище: <b>".$row['lastname']."</b><br>"; 
			echo "посада: <b>".$row['post']."</b><br>";
			$tak=true;
		}
	}
	
	if(!$tak){
		echo "Нікого не знайдено."; 
	}
	
}

?>