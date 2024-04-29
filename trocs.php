<h2> Gestion des trocs</h2>
<?php
	if(isset($_POST['Valider'])){
		$unControleur->insertTroc($_POST); 
	}
	$leTroc = null; 
	if(isset($_GET['action']) && isset($_GET['idtroc']))
	{
		$action = $_GET['action'];
		$idtroc = $_GET['idtroc']; 
		switch ($action) {
			case 'sup': $unControleur->deleteTroc($idtroc); break;
			case 'edit': $leTroc = $unControleur->selectWhereTroc ($idtroc) ; 
				break;
		}
	}

	require_once ("vue/vue_insert_troc.php");

	if(isset($_POST['Modifier'])){
		$unControleur->updateTroc($_POST); 
		header("Location: index.php?page=4");
	}

	if (isset($_POST['Filtrer'])){
		$lesTrocs = $unControleur->searchAllTrocs($_POST['filtre']);
	}else{ 
		$lesTrocs = $unControleur->selectAllTrocs(); 
	}
	require_once ("vue/vue_les_trocs.php");
	/*$lesObjets = $unControleur->selectAllObjets(); 
	$lesEnfants = $unControleur->selectAllEnfants(); 
	require_once ("vue/vue_insert_troc.php"); 
	if(isset($_POST['Valider'])){
		$unControleur->insertTroc($_POST); 
	}

	$lesTrocs = $unControleur->selectAllTrocs(); 
	
	require_once ("vue/vue_les_trocs.php"); */
?>
