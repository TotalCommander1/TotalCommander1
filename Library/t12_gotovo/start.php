<?
$db=mysql_connect(HOST,USER,PASSWORD);

if(!$db){
	exit("�� �� ������� �� ���� �����, ������� - ".mysql_error());
}

if(!mysql_select_db(DB,$db)){
	exit("�� ������� ������� ���� ����� - ".mysql_error());
}
mysql_query("SET NAMES 'utf8'"); 

?>