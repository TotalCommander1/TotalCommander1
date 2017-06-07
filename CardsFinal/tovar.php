<?
include "start.php";
$q=mysql_query("SELECT * FROM tovar");
while($row=mysql_fetch_array($q)){
?>
	
	<tr>
		<!--
			<td width='40' class='kosik'> -
			Доданий клас 'kosik' - це для пошуку контейнерів div в 
			середені цього класу (дивись фунцію click_tovar()).
			
			<div class='kosik1' id='< echo $row["id"]; >' title='' name='1'></div>
			- цей запис створює квадратик з допомогою якого можна вибирати товар
			 
			id='< echo $row["id"]; >'  - цей запис говорить про те, що кожен 
			квадратик  має таку ж назву (id), як і номер цього товару у базі даних.
			
			Атрибут title на початку пустий (title=''), під час кліку мишки по 
			квадратику у атрибут title записується слово 'ok' (.attr('title','ok') 
			- фунція click_tovar())
			
			під час кліку мишки по квадратику клас kosik1 замінюється на клас
			kosik2 ($(this).removeClass('kosik1').addClass('kosik2') - функція click_tovar())
			
			Отже, всі виділені товари мають значення атрибута title='ok'.
			Верхня частина функції save_id() перевіряє весь список товарів, так, 
			як він невеликий, сумує всі занчення title='ok' у змінну $oktov, після
			циклу перевірки її значення є рівне кількості вибраного товару.
			Також ця ж частина функції формує текстову змінну $idtov='2;3;5;6;'.
			У цій текстовій змінній послідовно записані номери вибраних користувачем 
			товарів, які розділені символом ";"
				function save_id(){
					$idtov='';
					$oktov=0;
					$('.kosik2').each(function(){
						$idtov+=$(this).attr('id')+';';
						$oktov++;
					});
			Нижня частина ф-ції save_id() записує у кукіс 
			рядок з номерами вибраних користувачем товарів
					$('#ok').text($oktov);
					$.ajax({
						type:"POST",
						url:"save_id.php", - запис відбувається у файлі save_id.php
						data:({idtov:$idtov})
					});
				}
			Таким чиноv функція click_tovar() всього лиш змінює значення атрибуту
			title і змінює вигляд квадратика, все інше - формування рядка 
		-->
		<td width='40' class='kosik'>
			<div class='kosik1' id='<? echo $row["id"]; ?>' title='' name='1'></div>
		</td>
		<!--END -->
		<td><img src='<? echo $row['foto'] ?>' id='produkt_foto'></td>
		<td valign='top'>
			<span class='n_tovar'>		№ <? echo $row['id'] 	?>	<br></span>
			<span class='name_tovar'>	<? echo $row['name'] 	?>	<br></span>
			<span class='help_tovar'>	<? echo $row['help'] 	?>	<br></span>Ціна:
			<span class='price_tovar'>	<? echo $row['price'] 	?>		</span> .Є на складі шт:
			<span class='have_tovar'>	<? echo $row['have'] 	?>		</span>
		</td>
	</tr>

<?}?>