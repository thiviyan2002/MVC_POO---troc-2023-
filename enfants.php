<h2>Gestion des enfants</h2>

<?php
	if(isset($_POST['Valider'])){
		$unControleur->insertEnfant($_POST); 
	}
	$lEnfant = null; 
	if(isset($_GET['action']) && isset($_GET['idenfant']))
	{
		$action = $_GET['action'];
		$idenfant = $_GET['idenfant']; 
		switch ($action) {
			case 'sup': $unControleur->deleteEnfant($idenfant); break;
			case 'edit': $lEnfant = $unControleur->selectWhereEnfant ($idenfant) ; 
				break;
		}
	}

	require_once ("vue/vue_insert_enfant.php");

	if(isset($_POST['Modifier'])){
		$unControleur->updateEnfant($_POST); 
		header("Location: index.php?page=3");
	}

	if (isset($_POST['Filtrer'])){
		$lesEnfants = $unControleur->searchAllEnfants($_POST['filtre']);
	}else{ 
		$lesEnfants = $unControleur->selectAllEnfants(); 
	}
	require_once ("vue/vue_les_enfants.php");
	
	/*require_once ("vue/vue_insert_enfant.php"); 

	if(isset($_POST['Valider'])){
		$unControleur->insertEnfant($_POST); 
	}	
	$lesEnfants = $unControleur->selectAllEnfants(); 
	
	require_once ("vue/vue_les_enfants.php"); */
?>
