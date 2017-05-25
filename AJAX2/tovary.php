<?php
	include "db.php";
	
	$q = mysql_query("SELECT * FROM tovar");
	
	while ($row = mysql_fetch_array($q)) {
		echo '<tr>
				<td width="40">
					<input type="checkbox" id="' . $row['id'] . '">
				</td>
				<td><img src="' . $row['foto'] . '"></td>
				<td valing="top">
					<h2 class="name_tovar">' . $row['name'] . '</h2>
					<span class="help_tovar">' . $row['help'] . '</span>
					<span class="price_tovar">' . $row['price'] . '</span>
					<span class="valuta_tovar">' . $row['valuta'] . '</span>
					<span class="prfiks_tovar">' . $row['prefiks'] . '</span>
					<span class="unit_tovar">' . $row['unit'] . '</span>
				</td>
			</tr>';
	}
?>