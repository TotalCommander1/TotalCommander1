<?
function start_f(){
	
	$m=$_GET['m'];
	if(!isset($_GET['m'])){
		$m=1;
	}
	return $m;
}
function img_src($m){
	$q=mysql_query("SELECT img_src FROM foto WHERE id_car='$m'");
	$i=1;
	while($row=mysql_fetch_array($q)){
		$img_src[$i]=$row['img_src'];
		$i++;
	}
	return $img_src;
}
?>