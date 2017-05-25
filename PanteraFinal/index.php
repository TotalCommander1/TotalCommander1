<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="кращі програмісти світу">
	<meta name="description" content="Короткий опис сайту">
	<meta name="author" content="0667851672">
	<title>ДП "Пантера"</title>
	<link rel="icon" href="">
	<link rel="shortcut icon" href="http://www.humbleisd.net/cms/lib2/TX01001414/Centricity/Domain/3585/black%20paw.jpg">
	<link rel="stylesheet" href="jquery-ui.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="jquery.js"></script>
	<script src="jquery-ui.js"></script>
</head>
<body>

<script>

$(document).ready(function(){
 $( "#accordion" ).accordion();
$("#logo").click(function(){
alert("Клац!")

})
$("#img").click(function(){
$(this).slideUp(3000).slideDown(3000)

})
	});
</script>

		<?php
			define("HOST","localhost");
			define("USER","s662720h_uuuuu");
			define("PASSWORD","ytytuh100");
			define("DB","s662720h_uuuuu");
			
			$db=mysql_connect(HOST,USER,PASSWORD);
			
			if(!$db){
				exit("Помилка!!!");
			}
			
			$open_db=mysql_select_db(DB,$db);
			
			if(!$open_db){
				exit("Помилка!!!");
			}
		?>
		<div id="logo">
		DIKA PANTERA~DV
		<p><h1>Фірма "Пантера"</h1></p></div>
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
				
				$q=mysql_query("SELECT id,name FROM PANTERA");
				
				for($i=1; $i<=mysql_num_rows($q); $i++){
					$row=mysql_fetch_array($q);
				
					echo "<a href='?menu=".$row['id']."'>".$row['name']."</a>";
				}
			?>
			<div id="accordion">
  <h3>Колготи</h3>
  <div>
    <p>
Еластичні прозорі колготки, укріплені пальці, плоский шов,
   бавовняна ластовиця.  Зроблено із використанням передових італійських технологій. Склад:поліамід,еластан. 
    </p>
  </div>
  <h3>Шкарпетки</h3>
  <div>
    <p>
Вироби панчішно-шкарпеткові трикотажні машинного чи ручного в'язання, з синтетичних волокон, до 67 децитекс
    </p>
  </div>
  <h3>Слідки</h3>
  <div>
    <p>
   
    </p>
    <ul>
      <li><h6>Оригінальні</h6></li>
      <li><h6>Недорогі</h6></li>
      <li><h6>Якісні</h6></li>
    </ul>
  </div>
  <h3>Дитячі колготи</h3>
  <div>
    <p>
  Дитячі колготи виготовлені з поліамідної нитки та лайкри з узором та без нього.Можуть бути виготовлені під індивідуальне замовлення.
    </p>
  </div>
</div>
		</div>
		<div id="content">
		<div id="img">
			<?php
				$q=mysql_query("SELECT foto FROM PANTERA WHERE id=$menu");
					
				for($i=1; $i<=mysql_num_rows($q); $i++){
					$row=mysql_fetch_array($q);
				
					echo "<img src='".$row['foto']."' align='right'>";
				}
			?>
			</div>
			<p>
				<?php
					$q=mysql_query("SELECT text FROM PANTERA WHERE id=$menu");
					
					$row=mysql_fetch_array($q);
					
					echo $row['text'];
				?>
				
			</body>	