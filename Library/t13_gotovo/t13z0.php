<!DOCTYPE html>
<head>
	<title>Кращі автомобілі</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?
include "start.php";
include "myfunction.php";

$m=start_f();
$img_src=img_src($m);
$q=mysql_query("SELECT id,name FROM car");
				$i=1;
				while($row=mysql_fetch_array($q)){
					$id[$i]=$row['id'];
					$name[$i]=$row['name'];
					$i++;
				}

?>
<table width='100%' border='1'>
	<tr>
		<td id='logo'>
			Кращі автомобілі світу
		</td>
		<td rowspan='2'>
			<?	
				for($i=1;$i<=count($img_src);$i++){
					echo "<img src='$img_src[$i]' width='100%'>";
				}
			?>
		</td>
	</tr>
	<tr>
		<td id='menu' valign='top'>
			<?
				
				
				for($i=1;$i<=count($name);$i++){
					echo "<a href='?m=$id[$i]'>$name[$i]</a>";
				}
					
				
			?>
		</td>
		
	</tr>
</table>

</body>

