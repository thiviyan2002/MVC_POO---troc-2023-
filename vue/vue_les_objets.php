<h3>Liste des objets</h3>
<form method="post">
	Filtrer par : <input type="text" name="filtre">
	<input type="submit" name="Filtrer"
	value="Filtrer">
</form>
<br/>

<table border ='1'>
	<tr> 
		<td> Id Objet </td> 
		<td> Nom Objet </td>
		<td> Couleur </td> 
		<td> Prix </td> 
		<td> Taille </td> 
		<td> categorie </td> 
		<td> troc </td> 
		<td> enfant </td>
		<td> Opérations </td>
	<tr> 
	<?php
	foreach ($lesObjets as $unObjet) {
		echo "<tr>"; 
		echo "<td>".$unObjet['idObjet']."</td>"; 
		echo "<td>".$unObjet['nom_o']."</td>"; 
		echo "<td>".$unObjet['couleur']."</td>"; 
		echo "<td>".$unObjet['prix']."</td>"; 
		echo "<td>".$unObjet['taille']."</td>"; 
		echo "<td>".$unObjet['idcategorie']."</td>";
		echo "<td>".$unObjet['idtroc']."</td>";
		echo "<td>".$unObjet['idenfant']."</td>";
		echo "<td>"; 
		echo "<a href='index.php?page=2&action=sup&idObjet=".$unObjet['idObjet']."'> <img src='images/sup.png' height='30' witdh='30'> </a>"; 
		echo "<a href='index.php?page=2&action=edit&idObjet=".$unObjet['idObjet']."'> <img src='images/edit.png' height='30' witdh='30'> </a>"; 
		echo "</td>"; 
		echo "<tr/>";
	}
	?>
</table>