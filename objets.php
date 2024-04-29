<h2> Gestion des objets</h2>
<?php
	$lesCategories = $unControleur->selectAllCategories ();
	$lesTrocs = $unControleur->selectAllTrocs ();
	$lesEnfants = $unControleur->selectAllEnfants ();
	if(isset($_POST['Valider'])){
		$unControleur->insertObjet($_POST); 
	}
	$lObjet = null; 
	if(isset($_GET['action']) && isset($_GET['idObjet']))
	{
		$action = $_GET['action'];
		$idObjet = $_GET['idObjet']; 
		switch ($action) {
			case 'sup': $unControleur->deleteObjet($idObjet); break;
			case 'edit': $lObjet = $unControleur->selectWhereObjet ($idObjet) ; 
				break;
		}
	}

	require_once ("vue/vue_insert_objet.php");

	if(isset($_POST['Modifier'])){
		$unControleur->updateObjet($_POST); 
		header("Location: index.php?page=2");
	}

	if (isset($_POST['Filtrer'])){
		$lesObjets = $unControleur->searchAllObjets($_POST['filtre']);
	}else{ 
		$lesObjets = $unControleur->selectAllObjets(); 
	}
	require_once ("vue/vue_les_objets.php");
	/*
	$lesCategories = $unControleur->selectAllCategories ();
	$lesTrocs = $unControleur->selectAllTrocs ();  

	require_once ("vue/vue_insert_objet.php");

	if (isset($_POST['Valider']))
	{
		$unControleur->insertObjet ($_POST); 
	}

	$lesObjets = $unControleur->selectAllObjets ();

	require_once ("vue/vue_les_objets.php");*/
?>







