<h3>Ajout d'un nouveau Enfant</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom Enfant </td>
			<td><input type="text" name="nom"
			value="<?= ($lEnfant!=null)?$lEnfant['nom']:'' ?>"></td>
		</tr>
		<tr>
			<td>Prénom Enfant </td>
			<td><input type="text" name="prenom"
			value="<?= ($lEnfant!=null)?$lEnfant['prenom']:'' ?>"></td>
		</tr>
		<tr>
			<td>ville  </td>
			<td><input type="text" name="ville"
			value="<?= ($lEnfant!=null)?$lEnfant['ville']:'' ?>"></td>
		</tr>
		<tr>
			<td>nom responsable  </td>
			<td><input type="text" name="nom_responsable"
			value="<?= ($lEnfant!=null)?$lEnfant['nom_responsable']:'' ?>"></td>
		</tr>
		<tr>
			<td>Age  </td>
			<td><input type="text" name="age"
			value="<?= ($lEnfant!=null)?$lEnfant['age']:'' ?>"></td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"> </td>
			<td>
				<?= ($lEnfant!=null)? '<input type="submit" name="Modifier" value="Modifier">' : '
				<input type="submit" name="Valider" value="Valider">' ?>

			</td>
		</tr>
		<?= ($lEnfant!=null)? '<input type="hidden" name="idenfant" 
		value ="'.$lEnfant['idenfant'].'">'   :  '' ?>
	</table>
</form>