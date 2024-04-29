<h2>Liste des Categories</h2>
<form method="post">
	Filtrer par : <input type="text" name="filtre"> 
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
	<tr> 
		<td> Id Categorie </td> 
		<td> Nom  </td>
		<td> description  </td>  
		<td> Opérations </td>
	<tr> 
	<?php
	foreach ($lesCategories as $uneCategorie) {
		echo "<tr>"; 
		echo "<td>".$uneCategorie['idcategorie']."</td>"; 
		echo "<td>".$uneCategorie['nom_c']."</td>";
		echo "<td>".$uneCategorie['desc_c']."</td>"; 
		echo "<td> "; 
		echo "<a href='index.php?page=1&action=sup&idcategorie=".$uneCategorie['idcategorie']."'> <img src='images/sup.png' height='30' witdh='30'> </a>"; 
		echo "<a href='index.php?page=1&action=edit&idcategorie=".$uneCategorie['idcategorie']."'> <img src='images/edit.png' height='30' witdh='30'> </a>"; 
		echo "</td>";
		echo "<tr/>";
	}
	?>
</table>