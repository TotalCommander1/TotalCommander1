<table width='850' align='center' border='0'>
	<tr align='left' style='color:#cc0000; font-size:20px'>
		<th>№</th>
		<th>Назва товару:</th>
		<th>Ціна:</th>
		<th>К-сть:</th>
		<th>Сума:</th>
	</tr> 
<?
	/*Формуємо масив $x з номерами товарів (наприклад $x[0]=)*/
	$x=explode(";",$_COOKIE["idtov"]); 
	
	
	include "start.php";
	$s=0;
	for($i=0;$i<count($x)-1;$i++)
		{
			$q=mysql_query("SELECT id,name,price FROM tovar WHERE id='".$x[$i]."'");
			$row=mysql_fetch_array($q);
			$s+=$row['price'];
?>
	<tr class='tov'>
		<td id='id<? echo $i; ?>'><? echo $row['id'];?></td>
		<td id='name<? echo $i; ?>'><? echo $row['name'];?></td>
		<td id='price<? echo $i; ?>'><? echo $row['price'];?></td>
		<td><input name='<? echo $i;?>' title='<? echo $row['price'];?>' id='kilk<? echo $i ?>'  type='text' value='1' size='3'></td>
		<td id='sum<? echo $i; ?>'><? echo $row['price'];?></td>
	</tr>
<?}?>
	<tr style="color:red">
		<td colspan="4" align="right">Разом:</td>
		<td id="sfull"><? echo $s; ?></td>
	</tr>
</table>