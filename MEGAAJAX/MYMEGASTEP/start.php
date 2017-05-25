 <?
define("HOST","itelit.mysql.ukraine.com.ua");
define("USER","itelit_db");
define("PASSWORD","123qwerty123");
define("DB","itelit_db");

$db=mysql_connect(HOST,USER,PASSWORD);

$db=mysql_connect(HOST,USER,PASSWORD);

if(!$db){
	exit("Не має доступу до бази даних, помилка - ".mysql_error());
}

if(!mysql_select_db(DB,$db)){
	exit("Не можливо вибрати базу даних - ".mysql_error());
}
mysql_query("SET NAMES 'utf8'"); 

?>