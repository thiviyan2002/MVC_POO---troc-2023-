<h3>Ajout d'un nouvel Troc</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom  </td>
			<td><input type="text" name="nom_t"
			value="<?= ($leTroc!=null)?$leTroc['nom_t']:'' ?>"></td>
		</tr>
		<tr>
			<td>Nb objet  </td>
			<td><input type="text" name="nbr_objet"
			value="<?= ($leTroc!=null)?$leTroc['nbr_objet']:'' ?>"></td>
		</tr>
		
		<tr>
			<td>Année  </td>
			<td><input type="text" name="annee"
			value="<?= ($leTroc!=null)?$leTroc['annee']:'' ?>"></td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"> </td>
			<td>
				<?= ($leTroc!=null)? '<input type="submit" name="Modifier" value="Modifier">' : '
				<input type="submit" name="Valider" value="Valider">' ?>

			</td>
		</tr>
		<?= ($leTroc!=null)? '<input type="hidden" name="idtroc" 
		value ="'.$leTroc['idtroc'].'">'   :  '' ?>
	</table>
</form>