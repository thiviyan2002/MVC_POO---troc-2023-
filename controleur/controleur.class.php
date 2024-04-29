<?php
	require_once ("modele/modele.class.php");
	class Controleur {
		private $unModele ; 
		//instance de la classe Modele

		public function __construct ($serveur, $bdd, $user, $mdp){
			//instanciation de la classe Modele 
			$this->unModele = new Modele ($serveur, $bdd, $user, $mdp);
		} 
/*------------------------categorie------------------------*/
		public function selectAllCategories (){
			//$lesCategories = $this->unModele->selectAllCategories(); 
			//on fait traiter les données 
			//return $lesCategories; 
			return $this->unModele->selectAllCategories();
		}
		public function searchAllCategories ($filtre){
			return $this->unModele->searchAllCategories($filtre);
		}
		public function insertCategorie ($tab)
		{
			//appliquer des controles sur les données 

			$this->unModele->insertCategorie($tab);
		}
		public function deleteCategorie ($idcategorie){
			$this->unModele->deleteCategorie($idcategorie);
		}
		public function selectWhereCategorie ($idcategorie)
		{
			//on controle la presence de l'id 
			return $this->unModele->selectWhereCategorie ($idcategorie); 
		}
		public function updateCategorie ($tab){
			$this->unModele->updateCategorie ($tab);
		}

		public function countCategories (){
			return $this->unModele->countCategories(); 
		}

/*------------------------categorie------------------------*/
		public function selectAllObjets (){
			$lesObjets = $this->unModele->selectAllObjets(); 
			//on fait traiter les données 

			return $lesObjets; 
		}

		public function searchAllObjets ($filtre){
			$lesObjets = $this->unModele->searchAllObjets($filtre); 
			return $lesObjets;
		}

		public function insertObjet ($tab)
		{
			//appliquer des controles sur les données 

			$this->unModele->insertObjet($tab);
		}


		public function deleteObjet ($idObjet)
		{
			//on controle la presence de l'id 
			$this->unModele->deleteObjet($idObjet); 
		}
		public function updateObjet ($tab)
		{
			$this->unModele->updateObjet($tab); 
		}
		public function selectWhereObjet ($idObjet)
		{
			//on controle la presence de l'id 
			return $this->unModele->selectWhereObjet ($idObjet); 
		}

		public function selectAllEnfants (){
			$lesEnfants = $this->unModele->selectAllEnfants(); 
			//on fait traiter les données 

			return $lesEnfants; 
		}
		public function insertEnfant ($tab)
		{
			//appliquer des controles sur les données 

			$this->unModele->insertEnfant($tab);
		}
		public function searchAllEnfants ($filtre){
			return $this->unModele->searchAllEnfants($filtre);
		}
		public function deleteEnfant ($idcategorie){
			$this->unModele->deleteEnfant($idcategorie);
		}
		public function selectWhereEnfant ($idcategorie)
		{
			//on controle la presence de l'id 
			return $this->unModele->selectWhereEnfant ($idcategorie); 
		}
		public function updateEnfant ($tab){
			$this->unModele->updateEnfant ($tab);
		}

		public function countEnfants (){
			return $this->unModele->countEnfants(); 
		}
		public function selectAllTrocs (){
			$lesTrocs = $this->unModele->selectAllTrocs(); 
			//on fait traiter les données 

			return $lesTrocs; 
		}
		public function searchAllTrocs ($filtre){
			$lesTrocs = $this->unModele->searchAllTrocs($filtre); 
			return $lesTrocs;
		}
		public function insertTroc ($tab)
		{
			//appliquer des controles sur les données 

			$this->unModele->insertTroc($tab);
		}
		public function selectWhereTroc ($idtroc)
		{
			//on controle la presence de l'id 
			return $this->unModele->selectWhereTroc ($idtroc); 
		}
		public function deleteTroc ($idtroc){
			$this->unModele->deleteTroc($idtroc);
		}
		public function updateTroc ($tab){
			$this->unModele->updateTroc ($tab);
		}

		public function countTroc (){
			return $this->unModele->countTroc(); 
		}

		public function verifConnexion ($email,$mdp)
		{
			$user = $this->unModele->verifConnexion ($email,$mdp); 
			return $user;
		}
		public function insertUser($tab)
		{
			$this->unModele->insertUser($tab);
		}
	}

?>