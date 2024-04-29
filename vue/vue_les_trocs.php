<h2>Liste des Trocs</h2>
<form method="post">
	Filtrer par : <input type="text" name="filtre"> 
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table>
	<tr> 
		<td> Id Troc </td> 
		<td> Nom  </td>
		<td> Nb objet </td> 
		<td> Année  </td> 
		<td> Opérations </td>
	<tr> 
	<?php
	foreach ($lesTrocs as $unTroc) {
		echo "<tr>"; 
		echo "<td>".$unTroc['idtroc']."</td>"; 
		echo "<td>".$unTroc['nom_t']."</td>"; 
		echo "<td>".$unTroc['nbr_objet']."</td>"; 
		echo "<td>".$unTroc['annee']."</td>";
		echo "<td> "; 
		echo "<a href='index.php?page=4&action=sup&idtroc=".$unTroc['idtroc']."'> <img src='images/sup.png' height='30' witdh='30'> </a>"; 
		echo "<a href='index.php?page=4&action=edit&idtroc=".$unTroc['idtroc']."'> <img src='images/edit.png' height='30' witdh='30'> </a>"; 
		echo "</td>";
		echo "<tr/>";
	}
	?>
</table>