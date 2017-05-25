<!DOCTYPE html>
<head>
	<title>Кращі програмісти світу</title>
	<?

	if(isset($_GET['st'])){$st=$_GET['st'];}else{$st=1;}
		
	if($st==1){
	echo"<link rel='stylesheet' type='text/css' href='t13z4_new.css'>";
	$st=2;}
	else
	{
	echo"<link rel='stylesheet' type='text/css' href='t13z4.css'>";
	$st=1;
	}
	?>
</head>
<body>
<?
echo"<div id=chStyle><a href='?st=".$st."'>Змінити дизайн</a> </div>";
?>
<?
	include "start.php";
	$action_menu=get_action_menu();
	$menu=get_menu();
	$аbout_programmers=get_аbout_programmers($action_menu);
?>
<table id='center' cellspacing="20" border='0' bordercolor='white'>
	<tr id='top'>
		<td  id='logo_text'>
			КРАЩІ ПРОГРАМІСТИ СВІТУ
		</td>
		<td id='content' rowspan='2'>
			<?
				print_inf_programmer($аbout_programmers);
			?>
		</td>
	</tr>
	
		<tr valign='top'>
			<td id='menu'>
				<? 
					print_menu($menu,$action_menu,$st);
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
			$tab=mysql_query("SELECT id FROM pages ");
			$row=mysql_fetch_array($tab);
			$menu=$row['id'];
		}
		return $menu;
	}
	function get_menu(){
		$tab=mysql_query("SELECT id,name FROM pages ");
		$i=1;
		while($row=mysql_fetch_array($tab)){
			$menu_list[$i]['id']=$row['id'];
			$menu_list[$i]['name']=$row['name'];
			$i++;
		}
		return $menu_list;
	}
	
	function get_аbout_programmers($am){
		$tab=mysql_query("SELECT text,foto FROM pages WHERE id='$am'");
		$row=mysql_fetch_array($tab);
		return $row;
	}
	function print_menu($m,$am,$st){
		for($i=1;$i<=count($m);$i++){
			$cl="";
			if($i==$am){
				$cl="class='action'";
			}
			echo "<a href='?menu=".$m[$i]['id']."&st=".$st."'".$cl.">".$m[$i]['name']."</a><br>";
		}
		
	}
	function print_inf_programmer($inf_prog){
				echo "<img src='".$inf_prog["foto"]."' align='right'>";
				echo $inf_prog["text"];	
	}
?>

