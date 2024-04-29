<h3>Ajout d'un nouveau Categorie</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom  </td>
			<td><input type="text" name="nom_c"
			value="<?= ($laCategorie!=null)?$laCategorie['nom_c']:'' ?>"></td>
		</tr>
		<tr>
			<td>Description  </td>
			<td><input type="text" name="desc_c"
			value="<?= ($laCategorie!=null)?$laCategorie['desc_c']:'' ?>"></td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td>
			<td> <input type="submit" 
				<?= ($laCategorie!=null)? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" ' ?>
				> </td>
		</tr>
	</table>
	<?= 
	($laCategorie!=null)?'<input type="hidden" name="idcategorie" value="'.$laCategorie['idcategorie'].'" >' : ''
	?>
	</table>
</form>