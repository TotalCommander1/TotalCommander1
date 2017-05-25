<!DOCTYPE html>
<head>
	<title>Кращі автомобілі</title>
	<link rel="stylesheet" type="text/css" href="t13z1.css">
</head>
<body>
<?
	include "start.php";
	$action_menu=get_action_menu();  	//Повертає число (1 або 2 або 3) номер активного пункту меню
	$menu=get_menu(); 					//Повертає 2-вимірний масив з назвами і номерпми автомобілей
	$foto=get_foto($action_menu); //Повертає 1-вимірний масив з комірками 1, 2, 3, ...  у комірках якого є посилання на фото автомобілей
?>
<table id='center' cellspacing="20">
	<tr id='top'>
		<td  id='logo_text'>
			КРАЩІ АВТОМОБІЛІ СВІТУ
		</td>
		<td id='content' rowspan='2'>
			<?
				print_foto($foto);
			?>
		</td>
	</tr>
	
		<tr valign='top'>
			<td id='menu'>
				<? 
					print_menu($menu);
				?>
			</td>
		</tr>
	</table>
</body>

<?
// -----------------------------------------------------------
	function get_action_menu(){
		$menu=$_GET['menu'];
		if(!isset($_GET['menu'])){
			$menu=1;
		}
		return $menu;
	}
	
	function get_menu(){
		$tab=mysql_query("SELECT id,name FROM car ");
		$i=1;
		while($row=mysql_fetch_array($tab)){
			$menu[$i]['id']=$row['id'];
			$menu[$i]['name']=$row['name'];
			$i++;
		}
		return $menu;
	}
	
	function get_foto($am){
		$tab=mysql_query("SELECT img_src FROM foto WHERE id_car='$am' ORDER BY id");
		$i=1;
		while($row=mysql_fetch_array($tab)){
			$foto_list[$i]=$row['img_src'];
			$i++;
		}
		return $foto_list;
	}
	function print_menu($menu){
		for($i=1;$i<=count($menu);$i++){
			echo "<a href='?menu=".$menu[$i]['id']."'>".$menu[$i]['name']."</a><br>";
		}
		
	}
	function print_foto($foto){
		for($i=1;$i<=count($foto);$i++){
			echo"<div class='foto_car'>";
				echo "<img  src='".$foto[$i]."'>";
			echo"</div>";
		}
		
	}
?>

