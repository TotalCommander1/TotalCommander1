<?php
	define("HOST","webmait.mysql.ukraine.com.ua");
	define("USER","webmait_z198");
	define("PASSWORD","xbhmhm2s");
	define("DB","webmait_z198");

	$db=mysql_connect(HOST,USER,PASSWORD);

	if(!$db){
		exit("Не має доступу до бази даних, помилка - ".mysql_error());
	}

	if(!mysql_select_db(DB,$db)){
		exit("Не можливо вибрати базу даних - ".mysql_error());
	}
	mysql_query("SET NAMES 'utf8'"); 
?>