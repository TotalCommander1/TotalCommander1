<?
$name_client=trim(strip_tags($_POST["name_client"]));
$tel_client=trim(strip_tags($_POST["tel_client"]));
$email_client=trim(strip_tags($_POST["email_client"]));
$adress_client=trim(strip_tags($_POST["adress_client"]));
$client_coment=trim(strip_tags($_POST["client_coment"]));
$sum=$_POST["sum"];

$kilkist=explode(";",$_COOKIE["kilkist"]);
$tovar=explode(";",$_COOKIE["idtov"]);

$count_tovar=count($tovar)-1;
include "start.php";
for($i=0;$i<$count_tovar;$i++){
	$tab=mysql_query("SELECT id,name,price,have FROM tovar WHERE id='".$tovar[$i]."'");
	$row=mysql_fetch_array($tab);
	$array_id_tovar[$i]=$row["id"];
	$array_name_tovar[$i]=$row["name"];
	$array_price_tovar[$i]=$row["price"];
	$array_have_tovar[$i]=$row["have"];
}
$nam="EKOADMIN";
$admin_mail="komar.ivan.97@gmail.com";
$subject="НОВЕ ЗАМОВЛЕННЯ У МАГАЗИНІ \"ЕКО-КОШИК\"!";

$message_tovar="";
for($i=0;$i<$count_tovar;$i++)
{
	$j=$i+1;
	$message_tovar.=$j.") № ".$array_id_tovar[$i]." ".$array_name_tovar[$i]." (".$array_price_tovar[$i].")- ".$kilkist[$i]."<br>";
}

$message_admin="У вашому магазині (Еко-кошик) нове замовлення.<br>Дані покупця:<br>";
$message_admin.="Ім'я: <b>".$name_client."</b><br>";
$message_admin.="Телефон: <b>".$tel_client."</b><br>";
$message_admin.="E-mail: <b>".$email_client."</b><br>";
$message_admin.="Адреса: <b>".$adress_client."</b><br>";
$message_admin.="Замовлено: <br><b>".$message_tovar."</b><br>";
$message_admin.="<br><strong style='color:red;'>ВСЬОГО ДО ОПЛАТИ -".$sum."грн.</strong><br>";

$message_client="У МАГАЗИНІ \"ЕКО-КОШИК\" ВИ ЗАМОВИЛИ ТАКІ ТОВАРИ:<br><b>".$message_tovar;
$message_client.="<br><strong style='color:red;'>ВСЬОГО ДО ОПЛАТИ - ".$sum."грн.</strong><br>";
$message_client.="<br>Продавцю вказали такі дані про себе:<br>";
$message_client.="Ім'я: <b>".$name_client."</b><br>";
$message_client.="Телефон: <b>".$tel_client."</b><br>";
$message_client.="E-mail: <b>".$email_client."</b><br>";
$message_client.="Адреса: <b>".$adress_client."</b><br>";
$message_admin.="Коментар: <br><b>".$client_coment."</b><br>";
$message_client.="<br>ДЯКУЄМО ЗА ПОКУПКУ!<br><br>Якщо десь допущена помилка, то зателефонуйте нам за телефоном: 067 977 20 37<br>Якщо цей лист вам попав випадково, то проігноруйте його.<b><br>";

$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=utf-8\r\n";
$headers.="From: ".$nam." <".$admin_mail.">\r\n";
$headers.="Subject:" .$subject;

$send_client_ok=mail($email_client, $subject, $message_client, $headers);
$send_admin_ok=mail($admin_mail, $subject, $message_admin, $headers);
$ok=0;
$ok=$send_client_ok*$send_admin_ok;
echo $ok;
?>