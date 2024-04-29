<h2>Liste des enfants</h2>
<form method="post">
	Filtrer par : <input type="text" name="filtre"> 
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table>
	<tr> 
		<td> Id Enfant </td> 
		<td> Nom Enfant </td>
		<td> prénom </td> 
		<td> ville  </td> 
		<td> nom responsable  </td> 
		<td> Age  </td> 
		<td> Opérations </td>
	<tr> 
	<?php
	foreach ($lesEnfants as $unEnfant) {
		echo "<tr>"; 
		echo "<td>".$unEnfant['idenfant']."</td>"; 
		echo "<td>".$unEnfant['nom']."</td>"; 
		echo "<td>".$unEnfant['prenom']."</td>"; 
		echo "<td>".$unEnfant['ville']."</td>"; 
		echo "<td>".$unEnfant['nom_responsable']."</td>";
		echo "<td>".$unEnfant['age']."</td>";  
		echo "<td> "; 
		echo "<a href='index.php?page=3&action=sup&idenfant=".$unEnfant['idenfant']."'> <img src='images/sup.png' height='30' witdh='30'> </a>"; 
		echo "<a href='index.php?page=3&action=edit&idenfant=".$unEnfant['idenfant']."'> <img src='images/edit.png' height='30' witdh='30'> </a>"; 
		echo "</td>";
		echo "<tr/>";
	}
	?>
</table>