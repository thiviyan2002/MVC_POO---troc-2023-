<h3>Ajout d'une nouvelle objets</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom Objet </td>
			<td><input type="text" name="nom_o"
			value="<?= ($lObjet!=null)?$lObjet['nom_o']:'' ?>"></td>
		</tr>
		<tr>
			<td>Couleur </td>
			<td><input type="text" name="couleur"
			value="<?= ($lObjet!=null)?$lObjet['couleur']:'' ?>"></td>
		</tr>
		<tr>
			<td>Taille  </td>
			<td><input type="text" name="taille"
			value="<?= ($lObjet!=null)?$lObjet['taille']:'' ?>"></td>
		</tr>
		<tr>
			<td>Prix  </td>
			<td><input type="text" name="prix"
			value="<?= ($lObjet!=null)?$lObjet['prix']:'' ?>"></td>
		</tr>
		<tr>
			<td> Categorie  </td>
			<td>
			<select name="idcategorie">
				<?php
				foreach ($lesCategories as $uneCategorie) {
					echo "<option value='".$uneCategorie['idcategorie']."'>"; 
					echo $uneCategorie['nom_c']; 
					echo "</option>";
				}
				?>
			</select>
			</td>
		</tr>
		<tr>
			<td> Troc  </td>
			<td>
			<select name="idtroc">
				<?php
				foreach ($lesTrocs as $unTroc) {
					echo "<option value='".$unTroc['idtroc']."'>"; 
					echo $unTroc['nom_t']; 
					echo "</option>";
				}
				?>
			</select>
			</td>
		</tr>
		<tr>
			<td> Enfant </td>
			<td>
			<select name="idenfant">
				<?php
				foreach ($lesEnfants as $unEnfant) {
					echo "<option value='".$unEnfant['idenfant']."'>"; 
					echo $unEnfant['nom']." ".$unEnfant['prenom'] ; 
					echo "</option>";
				}
				?>
			</select>
			</td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"> </td>
			<td>
				<?= ($lObjet!=null)? '<input type="submit" name="Modifier" value="Modifier">' : '
				<input type="submit" name="Valider" value="Valider">' ?>

			</td>
		</tr>
		<?= ($lObjet!=null)? '<input type="hidden" name="idObjet" 
		value ="'.$lObjet['idObjet'].'">'   :  '' ?>
	</table>
</form>





