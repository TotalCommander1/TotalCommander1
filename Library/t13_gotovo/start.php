<?
define("HOST","itelit.mysql.ukraine.com.ua");
define("USER","itelit_db");
define("PASSWORD","123qwerty123");
define("DB","itelit_db");

$db=mysql_connect(HOST,USER,PASSWORD);

if(!$db){
	exit("Не має доступу до сервера, помилка!");
}

$open_db=mysql_select_db(DB,$db);
if(!$open_db){
	exit("Не можливо вибрати базу даних, помилка");
}

mysql_query("SET NAMES 'UTF8'"); 

?>