<?
// Відкриття доступу до бази даних 
define("HOST","itelit.mysql.ukraine.com.ua");
define("USER","itelit_db");
define("PASSWORD","123qwerty123");
define("DB","itelit_db");

$db=mysql_connect(HOST,USER,PASSWORD);

if(!$db){
	exit("Не має доступу до бази даних, помилка - ".mysql_error());
}

if(!mysql_select_db(DB,$db)){
	exit("Не можливо вибрати базу даних - ".mysql_error());
}
mysql_query("SET NAMES 'utf8'");
// --------------------------------

$query="SELECT name, lastname, post FROM firma";
$tab=mysql_query($query);

for($i=1;$i<=mysql_num_rows($tab);$i++){
	$row=mysql_fetch_array($tab);
	echo $i.". ".$row['name']." ".$row['lastname']."-".$row['post']."<br>";	
}

?>