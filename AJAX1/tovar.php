<?
include "index.php";
$q=mysql_query("SELECT * FROM tovar");
while($row=mysql_fetch_array($q)){
?>
<tr> 
<td width='40'> 
<div class="kosik1" id='<? echo $row["id"]; ?>' title='' name='1'> </div> 
</td> 
<td> <img src='<? echo $row ['foto'] ?>' id='produkt_foro'> </td> 
<td valign="top"> 
<span class='n_tovar'> ¹ <? echo $row ['id'] ?> 
<br> </span> 
<span class='name_tovar'> <? echo $row ['name'] ?> 
<br> </span> 
<span class="help_tovar"> <? echo $row ['help'] ?> 
<br> </span> 
<span class="price_tovar"> <? echo $row ['price'] ?> 
<br> </span> 
<span class="value_tovar"> <? echo $row ['valuta'] ?> 
<br> </span> 
<span class="pre_tovar"> <? echo $row ['prefiks'] ?> 
<br> </span> 
<span class="unit_tovar"> <? echo $row ['unit'] ?> 
<br> </span> 
</td> 
</tr> 
<? } ?>