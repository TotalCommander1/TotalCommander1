﻿<!DOCTYPE html>
<head>
	<title>Кращі автомобілі</title>
	<link rel="stylesheet" type="text/scc" href="t13z3.css">
</head>
<body>
<?
	include "start.php";
	$action_menu=get_action_menu();
	$menu=get_menu();
	$foto=get_foto($action_menu);
?>
<table id='center' cellspacing="20" border="0" bordercolor="#ffffff">
	<tr id='top'>
		<td  id='logo_text' width="10">
			КРАЩІ АВТОМОБІЛІ СВІТУ
		</td>
		<td id='menu' align='left'>
			<?
				print_menu($menu,$action_menu);
			?>
		</td>
	</tr>
	<tr valign='top'>
		<td colspan='2' id='content'>
			<?
				print_foto($foto);
			?>
		</td>
	</tr>
	</table>
</body>
<?
	function get_action_menu(){
		if(isset($_GET['menu'])){
			$menu=$_GET['menu'];
		}else{
			$menu=1;
		}
		return $menu;
	}
	function get_menu(){
		$tab=mysql_query("SELECT id,name FROM car ORDER BY id");
		$i=1;
		while($row=mysql_fetch_array($tab)){
			$menu_list[$i]['id']=$row['id'];
			$menu_list[$i]['name']=$row['name'];
			$i++;
		}
		return $menu_list;
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
	function print_menu($m,$am){
		for($i=1;$i<=count($m);$i++){
			$cl="";
			if($i==$am){
				$cl="class='action'";
			}
			echo"<a 
					style='float:left;' 
					href='?menu=".$m[$i]['id']."'"
					.$cl.
				">"
					.$m[$i]['name'].
					"&nbsp&nbsp&nbsp&nbsp
				</a>";
		}
		
	}
	function print_foto($f){
		for($i=1;$i<=count($f);$i++){
			echo"<div class='foto_car'>";
				echo "<img src='".$f[$i]."'>";
			echo"</div>";
		}
		
	}
?>

