<form action="t11z2.php" method="POST">
	введіть рядок 
	<input type="text" name="str" size="100">
	<input type="submit">
</form> 
<? 
if(isset($_POST['str'])){
	$str=$_POST['str'];	unset($_POST['str']);
	
	// Функція mb_strlen($str,"UTF-8") 
	// перетворює кодування рядка в UTF-8 і 
	// повертає довжину рядка $str.
	$l=mb_strlen($str,"UTF-8");
	
	echo"<ol>";
	for($i=0;$i<$l;$i++)
	{
		// Функція mb_substr($str,$i,1,"UTF-8") 
		// перетворює кодування рядка в UTF-8 і 
		// повертає один (1) символ цього рядка 
		// починаючи з символа з номером $i.
		// Номер першого символу рядка = 0.
		$s=mb_substr($str,$i,1,"UTF-8");
		
		if($s==" "){
			$s="_";
		}
		
		echo"<li>".$s."</li>";
	}
	echo"</ol>";
}
?>