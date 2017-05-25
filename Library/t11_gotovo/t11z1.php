<form action="t11z1.php" method="POST">
	введіть рядок 
	<input type="text" name="str" size="100">
	<input type="submit">
</form>
<? 
// Якщо існує передана у цей файл методом POST
// змінна $_POST['str'], виконати { команди } 
if(isset($_POST['str'])){
	
	$str=$_POST['str'];
	
	unset($_POST['str']); // видалити змінну 
	
	echo "<h2>рядок без змін - |".$str."|</h2>";
	
	
	// поки кількість входжень двух ком у 
	// рядку $str більше 0, виконувати цикл.
	while(substr_count($str, ",,")>0){
		$str=str_replace(",,",",",$str);
	}
	
	echo "<h2>змінений рядок - |".$str."|</h2>";
}
?>