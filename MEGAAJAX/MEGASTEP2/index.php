
		<!DOCTYPE html>
		<html>
			<head>
<meta charset="utf-8">
<title> Еко-кошик </title>
<link rel='stylesheet' type='text/css' href='style.css'>
<link rel="stylesheet" type="text/css" href="js/jquery-ui.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
			</head>
			<body background='Img/wall.jpg'>
<script>
/* 
ЗАГАЛЬНИЙ ПЛАН КРОКУ № 4

	І. Створити функцію "keyup", яка рахує суму оплати для кожного товару в залежності від кількості введеної користувачем кількості, рахує загальну вартість замовлення, викликає на виконання файл save_kilkist.php.
	
	ІІ. Самостійно створити файл save_kilkist.php, завдання якого записати у кукіс рядок з кількістю, замовленого користувачем, товару.
		
	ІІІ. Самостійно зінити (дописати) файл show_table.php таким чином, щоб під рядками з переліком товарів з'явились рядки для вводу даних про замовника: "введіть ім'я", "телефон", "e-mail", "адреса доставки". Нижче цих рядків додайте кнопку "зроюити замовлення". Для накладання дизайну на додаткові рядки змініть (допишіть) файл style.css
	
	ІV. Створити функцію "click #zamovutu", яка після натиснення кнопки "зробити замовлення" відправлятиме у файл send.php дані про користувача, а саме його ім'я, телефон, e-mail, адресу доставки. 
	
	V. Самостійно створіть файл send.php. У цьому файлі прийміть передені у нього змінні: ім'я, телефон, e-mail, адресу доставки), а також у цьому файлі створіть два масиви: $tovar - у комірках якого буде записано id товарів, які замовив користувач; $kilkist - у комірках якого буде записана кількість кожного замовленого товару. Перевірте роботоздатність файлу send.php
*/
var $idtov='';
var $oktov=0;
var $sum; // - Змінна, яка міститиме суму, що має оплатити користувач за вибраний ним товар
var $kilkist; /* - Змінна, що містить рядок з кількістю товарів які замовив користувач, наприклад "12;2;14" */ 

$(function(){
	click_menu()
	click_tovar()
	read_id() 
	click_koshik()
});

	function click_koshik(){
		$('#ks').click(function(){
			$.ajax({
				type:"POST",
				url:"show_table.php",
				success:function(data){
					$("#select_tovar").html(data).dialog({"width":900,"height":600});
					
					/* функція "keyup" реагує на підняття клавіші у полі "інпут" таблиці з вибраним користувачем товаром.*/
					$(".tov input").keyup(function(){ 
						/* I. Після підняття клавіші у полі "інпут" визначаються такі змінні - n, k, c, s */
						
							/* 1. Отримуємо змінну n - номер товару у таблиці з вибраними користувачем товарами (1, 2, 3, ...). Змінна n є значення атрибуту "name", тобто назвою товару. Значення атрибуту задається у файлі show_table.php */
							n=$(this).attr("name");
						
							/* 2. Отримуємо змінну k - кількість товару, або то, що введено корисувачем у поле "інпут" */ 
							k=$(this).val();
						
							/* 3. Отримуємо змінну c - ціна товару. Ціна товару (змінна c) є значення атрибуту "title" кожного товару (дивись файл show_table.php)*/
							c=$(this).attr("title");
							
							/* 4. Отримуємо змінну s - сума оплати за один товар, тобто кількість товару помножена на його ціну.*/ 
							s=k*c;
							
							/* 5. Обчислене значення суми, при натисненні (відпусканні) кожної клавіші, записуємо, як текст, у комірку таблиці з id, яке починається на слово "sum" і закінчується порядковим номером рядка таблиці. Наприклад id='sum1' - таку назву має комірка таблиці, що знаходиться у п'ятому стовбчику і першому рядку, id='sum2' - назва комірки 5 стовбчака, 2 рядка, і т. д. (дивись файл show_table.php)*/							
							$("#sum"+n).text(s);
							
						/* END I. */
						
						/* II. У цьому кроці формуємо такі змінні:
							1. Суму, що має оплатити користувач за всі вибрані ним товари - змінна $sum (змінна є глобальною, тому оголошується вверху програмного коду і буде доступна у кожній функції)
							2. Рядок $kilkist, з кількістю кожного товару, наприклад значення змвнної $kilkist="2;14;3;" означає, 2-кількість першого товару, 14-кількість другого товару, 3-кількість третього товару. Змінна $kilkist є теж глобальною. 
							3. Змінна $kilkist, для подальшого використання, з допомогою метода $.ajax({...})зберігається у кукісі (файл save_kilkist.php) 
							4. Значення $sum записуємо у комірку таблиці з id="sfull"*/
							
							//крок 1 і 2
								$sum=0;
								$kilkist="";
								for($i=0;$i<$oktov;$i++){
									$sum+=parseFloat($("#sum"+$i).text());
									$kilkist+=$("#kilk"+$i).val()+";";
								}
							//крок 3
								$.ajax({
									type:"POST",
									url:"save_kilkist.php",
									data:({kilkist:$kilkist})
								});
							//крок 4
								$("#sfull").text($sum);
							/* END II. */
					});// END функції "keyup" 
					
					/* функція "click #zamovutu" реагує на натиснення кнопки "зробити заовлення". Ця функція має передати дані до файлу send.php, який, у свою чергу відправлятиме листи з інформацією про замовлення власнику інтернет-магазину і клієнту. Наше завдання у кроці № 4 створити передачу даних у цей файл. Після натиснення кнопки викликається додаткове попереджуюче вікно - confirm("Ви дійсно бажаєте замовити цей товар?"), якщо користувач підтверджує свій намір купити вибраний товар, тоді уже йде передача даних до файлу send.php методом ajax. У цій ф-ції є 4 змінні, які потрібні власнику магазину для відправки товару -  $name_client, $tel_client, $email_client, $adress_client, відповідно ім'я клієнта, його телефон, електронна пошта і адрема доставки товару. id товарів і кілкість товарів, що замовив клієнт зберігається у змінних кукіса, тому ці дані передавати не потрібно, так, як вони є доступні у буть-якому php-файлі.  */
					$("#zamovutu").click(function(){
						var $ok=false;
						$ok=confirm("Ви дійсно бажаєте замовити цей товар?")
						if($ok){
							 $name_client=$('#client_name').val();
							 $tel_client=$('#client_tel').val();
							 $email_client=$('#client_email').val(); 
							 $adress_client=$('#client_adress').val();
												
								$.ajax({
									type:"POST",
									url:"send.php",
									data:({
											name_client:$name_client,
											tel_client:$tel_client,
											email_client:$email_client,
											adress_client:$adress_client,
											sum:$sum
										 }),
										 
									success: function(data){
											$("#select_tovar").dialog("close");
										}	
								});
								
							}
				});	// END функції "click #zamovutu" 
					
				}
			});
		})
	}

	function read_id(){ 
		$.ajax({
			type:"POST",
			url: "read_id.php",
			dataType: "json",
			success: function(data){
					$oktov=data.length-1
					$('#ok').text($oktov)
					for($i=0;$i<$oktov;$i++){
						$(".kosik div[id="+data[$i]+"]").removeClass("kosik1").addClass("kosik2").attr("title","ok")
					}

			}
		});
	}

	function save_id(){
			$idtov='';
			$oktov=0;
			$('.kosik2').each(function(){
				$idtov+=$(this).attr('id')+';'
				$oktov++
			});
			
			$('#ok').text($oktov)
			
			$.ajax({
				type:"POST",
				url:"save_id.php",
				data:({idtov:$idtov})
			});
		}

	function click_tovar()
	{
		$('.kosik div').click(function(){
			if($(this).attr('title')==""){
				$(this).removeClass('kosik1').addClass('kosik2').attr('title','ok');
			}else{
				$(this).removeClass('kosik2').addClass('kosik1').attr('title','');
			}
			save_id();
		});
	}
	


	function click_menu(){
		$('#k1').click(function(){		
			$("#AboutShop").dialog({"width":800});
		});
		$('#k2').click(function(){		
			$("#Regulations").dialog({"width":800});
		});
		$('#k3').click(function(){		
			$("#Kontakts").dialog({"width":800});
		});
	}
	




</script>
<div id='main'> 
	<div id='top'> 
		<div id='k1' title='Про магазин "Еко Кошик"'></div>
		<div id='k2' title='Правила магазину'></div>
		<div id='k3' title='Контакти(Адреса)'></div>
		<div id='ks'></div>
		<div id='vt'>
			<span id='SelectTovar'>Вибрано товарів:</span><span id='ok'>0</span>
		</div>
	</div>
	<div id='fon_tovar'>
		<table border='0' width='100%' cellspacing='20' id='tab_tovar'>
			<?	include "tovar.php"; ?>
		</table >
	</div>
</div>


<div class='h_w' id='AboutShop' title='ІНФОРМАЦІЯ ПРО НАШ МАГАЗИН'>
	<center><img src='Img/eko.jpg'></center>
	<p class='P_AboutShop'>
		Органічні продукти харчування - це сертифіковані, органічні, натуральні, екологічно-чисті, безпечні продукти харчування з природнім терміном зберігання. Органічні продукти виключають можливість використання генномодифікованих компонентів, пестицидів, мінеральних добрив, антиоксидантів, ароматизаторів, стабілізаторів, барвників, покращувачів смаку та інших добавок штучного походження.
	</p>
	<p class='P_AboutShop'>
		Продаж органічних продуктів харчування передбачає поставку продукції лише від виробників, діяльність яких відповідає сертифікації та стандартам Міжнародної федерації руху за органічне сільське господарство IBS-IFOAM Basic Standart`s. Кожен органічний продукт має спеціальне маркування та відповідний сертифікат, які підтверджують його якість.
	</p>
	<p class='P_AboutShop'>
		Органічний магазин "Еко-кошик" пропонує Вам придбати натуральні органічні продукти харчування з можливістю доставки вибраних товарів додому.
	</p>
</div>

<div class='h_w' id='Regulations' title='ПРАВИЛА ПОКУПОК У НАШОМУ МАГАЗИНІ'>
	<center><img src='Img/eko.jpg'></center>
	<p class='P_Regulations'>
		Купувати товари під фейковою адресою, номером телефона, іменем, прізвищем - ЗАБОРОНЕНО!
	</p>
	<h2 class='Aktsia'>Акція:</h2>
	<p class='P_Regulations'>	
		При покупці товару більше ніж на 250грн. ви отримуєте сертифікат-знижку 30% на придбання м'ясних виробів.
	</p>
</div>

<div class='h_w' id='Kontakts' title='НАШІ КООРДИНАТИ'>
	<p>Контактний телефон: 067 208 59 27, e-mail: torgeirchannel@gmail.com </p>
	<center>	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2588.2159713781916!2d25.6483475!3d49.55594800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473033eeea919ffd%3A0xfea81f1749956c80!2z0LLRg9C7LiDQmtC-0YDQvtC70YzQvtCy0LAsIDQsINCi0LXRgNC90L7Qv9GW0LvRjCwg0KLQtdGA0L3QvtC_0ZbQu9GM0YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1suk!2sua!4v1431278901225" width="600" height="450" frameborder="2" style="border:0"></iframe>
	</center>
	<br>
</div>

<div class='h_w' id='select_tovar' title='ВИБРАНІ ТОВАРИ'></div>
			
			</body>
	</html>