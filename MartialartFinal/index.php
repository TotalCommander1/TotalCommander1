<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Кращі програмісти світу">
	<meta name="description" content="Короткий опис сайту">
	<meta name="author" content="0667851672">
	<title>Бойові мистецтва</title>
	<link rel="icon" href="">
	<link rel="shortcut icon" href="http://andreyanow.ru/wp-content/uploads/2016/02/115606_html_6fc28816.jpg">
	<link rel="stylesheet" href="jquery-ui.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="jquery.js"></script>
	<script src="jquery-ui.js"></script>
</head>
<body>
<script>
var wiew_moto=true
$(document).ready(function(){
$("#p").click(function(){

if(wiew_moto){
$("#foto").slideUp(2000,function(){
$("#p").text("Глянути фото")
})
}
else{
$("#foto").slideDown(2000,function(){
$("#p").text("Сховати фото")
})
}
wiew_moto=!wiew_moto
})
 $( "#accordion" ).accordion();
   $( "#datepicker" ).datepicker();
     $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
	});
		//Library
	function p_in_h4(){
$("p").each(function(){
var t=$(this).text()
h=("<h4>"+t+"</h4>")
$(this).html(h)
})
	}
	function cw2(id_obj,w){
var wo=$("#"+id_obj).attr("width")
var ho=$("#"+id_obj).attr("height")
var k=w/wo
$("#"+id_obj).attr("width",w)
$("#"+id_obj).attr("height",k*ho)
}
	function zr(id_object,t1,t2){
	obj=$("#"+id_object)
	obj.slideUp(t1*1000).slideDown(t2*1000)
	}
	
	
	function change_in_h1(id_object){
	obj=$("#"+id_object)
	t=obj.text()
	h="<h1>"+t+"</h1>"
	obj.html(h)
	}
	function zmina_sized(name_id_obj,k){
	obj=$("#"+name_id_obj)
	var w=obj.width()
	var h=obj.height()
	w=w*k
	h=h/k
	obj.width(w).height(h)
	}
	function zmina_size(id_obj,k){
	obj=$("#"+id_obj)
	var w=obj.width()
	var h=obj.height()
	w=w*k
	h=h*k
	obj.width(w).height(h)
	}
	function wh(name_id_obj){
	obj=$("#"+name_id_obj)
	var w=obj.width()
	var h=obj.height()
	alert("Обєкт"+name_id_obj+",\nширина"+w+",\nвисота"+h)
	}
	
	function s(name_id_object){
	var obj=("#"+name_id_object)
	obj.hide(200)
	}
	function next_n(){
	n++
	if(n>2){n=0}
	}
	function next_it(){
	$("#content").text(p[n])
	$("#i").text(it[n])
	}
</script>
<p id="p" align="center" width="100%" >
Сховати фото
</p>
</p>
		<?php
			define("HOST","localhost");
			define("USER","s662720h_uuuuu");
			define("PASSWORD","ytytuh100");
			define("DB","s662720h_uuuuu");
			
			$db=mysql_connect(HOST,USER,PASSWORD);
			
			if(!$db){
				exit("Помилка!!!!");
			}
			
			$open_db=mysql_select_db(DB,$db);
			
			if(!$open_db){
				exit("Помилка!!!");
			}
		?>
		<div id="logo">Бойові мистецтва</div>
		<div id="menu">
			<?php
				mysql_query("SET names 'UTF8'");
				
				$menu=$_GET['menu'];
	
				if(!isset($_GET['menu'])){
					$menu=1;
				}
			
				$menu=$_GET['menu'];
				
				if(!isset($_GET['menu'])){
					$menu=1;
				}
				
				$q=mysql_query("SELECT id,name FROM FIGHT");
				
				for($i=1; $i<=mysql_num_rows($q); $i++){
					$row=mysql_fetch_array($q);
				
					echo "<a href='?menu=".$row['id']."'>".$row['name']."</a>";
				}
			?>
		</div>
		<div id="content">
		<div id="foto">
			<?php
				$q=mysql_query("SELECT foto FROM FIGHT WHERE id=$menu");
					
				for($i=1; $i<=mysql_num_rows($q); $i++){
					$row=mysql_fetch_array($q);
				
					echo "<img src='".$row['foto']."' align='right'>";
				}
			?>
			</div>
			<p>
				<?php
					$q=mysql_query("SELECT text FROM FIGHT WHERE id=$menu");
					
					$row=mysql_fetch_array($q);
					
					echo $row['text'];
				?>
			</p>
		</div>
	</div>
	<div id="accordion">
  <h3>Швидкість</h3>
  <div>
    <p>
   Шви́дкість — фізична величина, що відповідає відношенню переміщення тіла до проміжку часу, за який це переміщення відбувалось. Швидкість — величина векторна, тобто вона має абсолютну величину і напрямок.
    </p>
  </div>
  <h3>Сила</h3>
  <div>
    <p>
   Си́ла — фізична величина, що характеризує ступінь взаємодії тіл. Якщо на дане тіло діють інші тіла, то ця дія (взаємодія) проявляється у зміні форми і розмірів тіла (тіло деформується), або/та у зміні швидкості тіла (тіло рухається з прискоренням)[1]. У першому випадку маємо статичний прояв сили, у другому — динамічний. Виходячи з цього можливі два способи визначення сили: за деформацією тіла (наприклад, пружини) і за прискоренням, отриманим тілом.
    </p>
  </div>
  <h3>Реакція</h3>
  <div>
    <p>
    Реакція — у теорії автоматичного регулювання — процес на виході системи автоматичного регулювання (САР), який виникає при наявності впливу на вході. При дослідженні динаміки САР розглядається реакція на типове діяння. Реакція на одиничне східчасте діяння називається перехідною функцією. В стійкій системі діяння викликає деякий перехідний процес, після затухання якого система переходить в усталений стан (режим).
    </p>
    <ul>
    </ul>
  </div>
  <h3>Розум </h3>
  <div>
    <p>
   Розум (лат. ratio; грец. νους) — це пізнавальні та аналітичні здібності людини. Хоча інші види іноді демонструють деякі з цих функцій, слово зазвичай використовують у зв'язку з людиною. Слово розум має архаїчний еквівалент ум.
    </p>
  </div>
</div>
<p id="d">Дата: <input type="text" id="datepicker"></p>
</body>
<div id="dialog" title="Порада:">
  <p>Тренеруйтесь щодня!</p>
</div>
 
<button id="opener">Важлива інформація</button>
</html>