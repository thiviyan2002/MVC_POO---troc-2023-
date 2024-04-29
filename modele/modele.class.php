<?php
	class Modele 
	{
		private $unPDO ; 

		public function __construct ($serveur, $bdd, $user, $mdp){
		$this->unPDO = null;
		try{
		$this->unPDO = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
		}
		catch (PDOException $exp){
			echo "Impossible de se connecter au serveur<br/>"; 
			echo $exp->getMessage (); 
		}
		}
/*------------------------categorie------------------------*/
		public function selectAllCategories (){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from categorie ;  ";
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute (); 
			//extraction des données 
			$lesCategories = $select->fetchAll(); 
			//retourner les résultats 
			return $lesCategories;
		}else {
			return null; 
		}
		}
		public function searchAllCategories ($filtre){
			$requete ="select * from categorie 
					where nom_c like :filtre or desc_c like :filtre; " ;
			$donnees=array(":filtre"=> "%".$filtre."%");
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ($donnees); 
			return $select->fetchAll();  
		}
		public function insertCategorie($tab)
		{
			if ($this->unPDO != null){
				$requete ="insert into categorie values (null, :nom_c, :desc_c); "; 
				$donnees =array(":nom_c"=>$tab['nom_c'],
								":desc_c"=>$tab['desc_c']);
				$insert = $this->unPDO->prepare($requete); 
				$insert->execute ($donnees); 
			}
		}
		public function deleteCategorie ($idcategorie){
			$requete ="delete from categorie where idcategorie = :idcategorie ; " ;
			$donnees =array(":idcategorie"=>$idcategorie);
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ($donnees); 
		}
		public function selectWhereCategorie ($idcategorie)
		{
			if ($this->unPDO != null){
				$requete ="select * from categorie where idcategorie = :idcategorie ; "; 
				$donnees =array(":idcategorie"=>$idcategorie);
				$select = $this->unPDO->prepare($requete); 
				$select->execute ($donnees); 
				$uneCategorie = $select->fetch(); //une seule Categorie
				return $uneCategorie;
			}
		}
		public function updateCategorie ($tab){
			$requete="update categorie set nom_c = :nom_c, desc_c=:desc_c where idcategorie=:idcategorie ;"; 
			$donnees=array(
						":nom_c"=>$tab['nom_c'],
						":desc_c"=>$tab['desc_c'],
						":idcategorie"=>$tab['idcategorie']
						);
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ($donnees); 
		}
		public function countCategorie () {
			$requete ="select count(*) as nb from categorie ;";
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ();
			return $select->fetch();
		}

/*------------------------categorie------------------------*/
		public function selectAllObjets (){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from Objet ;";
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute (); 
			//extraction des données 
			$lesObjets = $select->fetchAll(); 
			//retourner les résultats 
			return $lesObjets;
		}else {
			return null; 
		}
		}

		public function searchAllObjets ($filtre){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from Objet where nom_o like :filtre or couleur like :filtre or taille like :filtre or prix like :filtre or idcategorie like :filtre or idtroc like :filtre ;  ";
			$donnees=array(":filtre"=>'%'.$filtre.'%');
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute ($donnees); 
			//extraction des données 
			$lesObjets = $select->fetchAll(); 
			//retourner les résultats 
			return $lesObjets;
		}else {
			return null; 
		}
		}

		public function insertObjet ($tab)
		{
			if ($this->unPDO != null){
				$requete ="insert into Objet values (null, :nom_o, :couleur, :taille, :prix, :idcategorie, :idtroc, :idenfant); "; 
				$donnees =array(":nom_o"=>$tab['nom_o'],
								":couleur"=>$tab['couleur'], 
								":taille"=>$tab['taille'], 
								":prix"=>$tab['prix'],
								":idcategorie"=>$tab['idcategorie'],
								":idtroc"=>$tab['idtroc'],
								":idenfant"=>$tab['idenfant']);
				$insert = $this->unPDO->prepare($requete); 
				$insert->execute ($donnees); 
			}
		}

		public function deleteObjet ($idObjet)
		{
			if ($this->unPDO != null){
				$requete ="delete from Objet where idObjet = :idObjet ; "; 
				$donnees =array(":idObjet"=>$idObjet);
				$delete = $this->unPDO->prepare($requete); 
				$delete->execute ($donnees); 
			}
		}

		public function updateObjet ($tab)
		{
			if ($this->unPDO != null){
				$requete ="update Objet set nom_o = :nom_o, couleur=:couleur, taille=:taille, prix = :prix, idcategorie=:idcategorie, idtroc=:idtroc, idenfant=:idenfant where idObjet =:idObjet; "; 
				$donnees =array(":nom_o"=>$tab['nom_o'],
								":couleur"=>$tab['couleur'], 
								":taille"=>$tab['taille'], 
								":prix"=>$tab['prix'],
								":idcategorie"=>$tab['idcategorie'],
								":idtroc"=>$tab['idtroc'],
								":idenfant"=>$tab['idenfant'],
								":idObjet"=>$tab['idObjet']);
				$update = $this->unPDO->prepare($requete); 
				$update->execute ($donnees); 
			}
		}

		public function selectWhereObjet ($idObjet)
		{
			if ($this->unPDO != null){
				$requete ="select * from Objet where idObjet = :idObjet ; "; 
				$donnees =array(":idObjet"=>$idObjet);
				$select = $this->unPDO->prepare($requete); 
				$select->execute ($donnees); 
				$unObjet = $select->fetch(); //une seule Objet
				return $unObjet;
			}
		}


		public function selectAllEnfants(){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from enfant ;  ";
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute (); 
			//extraction des données 
			$lesEnfants = $select->fetchAll(); 
			//retourner les résultats 
			return $lesEnfants;
		}else {
			return null; 
		}
		}

		public function insertEnfant ($tab)
		{
			if ($this->unPDO != null){
				$requete ="insert into enfant values (null, :nom, :prenom, :ville, :nom_responsable, :age); "; 
				$donnees =array(":nom"=>$tab['nom'],
								":prenom"=>$tab['prenom'], 
								":ville"=>$tab['ville'], 
								":nom_responsable"=>$tab['nom_responsable'],
								":age"=>$tab['age']);
				$insert = $this->unPDO->prepare($requete); 
				$insert->execute ($donnees); 
			}
		}
		public function searchAllEnfants ($filtre){
			$requete ="select * from enfant 
					where nom like :filtre or prenom like :filtre or ville like :filtre or nom_responsable like :filtre or age like :filtre; " ;
			$donnees=array(":filtre"=> "%".$filtre."%");
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ($donnees); 
			return $select->fetchAll();  
		}
		public function deleteEnfant ($idenfant){
			$requete ="delete from enfant where idenfant = :idenfant ; " ;
			$donnees =array(":idenfant"=>$idenfant);
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ($donnees); 
		}
		public function selectWhereEnfant ($idenfant)
		{
			if ($this->unPDO != null){
				$requete ="select * from enfant where idenfant = :idenfant ; "; 
				$donnees =array(":idenfant"=>$idenfant);
				$select = $this->unPDO->prepare($requete); 
				$select->execute ($donnees); 
				$unEnfant = $select->fetch(); //une seule Categorie
				return $unEnfant;
			}
		}
		public function updateEnfant ($tab){
			$requete="update enfant set nom=:nom, prenom=:prenom, ville=:ville, nom_responsable=:nom_responsable, age=:age WHERE idenfant=:idenfant ;"; 
			$donnees=array(
						":nom"=>$tab['nom'],
						":prenom"=>$tab['prenom'], 
						":ville"=>$tab['ville'], 
						":nom_responsable"=>$tab['nom_responsable'],
						":age"=>$tab['age'],
						":idenfant"=>$tab['idenfant']
						);
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ($donnees); 
		}
		public function countEnfants () {
			$requete ="select count(*) as nb from enfant ;";
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ();
			return $select->fetch();
		}

		


		public function selectAllTrocs (){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from troc ;  ";
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute (); 
			//extraction des données 
			$lesTrocs = $select->fetchAll(); 
			//retourner les résultats 
			return $lesTrocs;
		}else {
			return null; 
		}
		}
	public function insertTroc($tab)
		{
			if ($this->unPDO != null){
				$requete ="insert into troc values (null, :nom_t, :nbr_objet, :annee); "; 
				$donnees =array(":nom_t"=>$tab['nom_t'],
								":nbr_objet"=>$tab['nbr_objet'], 
								":annee"=>$tab['annee']);
				$insert = $this->unPDO->prepare($requete); 
				$insert->execute ($donnees); 
			}
		}
		public function searchAllTrocs ($filtre){
			$requete ="select * from troc 
					where nom_t like :filtre or nbr_objet like :filtre or annee like :filtre; " ;
			$donnees=array(":filtre"=> "%".$filtre."%");
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ($donnees); 
			return $select->fetchAll();  
		}
		public function deleteTroc ($idtroc){
			$requete ="delete from troc where idtroc = :idtroc ; " ;
			$donnees =array(":idtroc"=>$idtroc);
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ($donnees); 
		}
		public function selectWhereTroc ($idtroc)
		{
			if ($this->unPDO != null){
				$requete ="select * from troc where idtroc = :idtroc ; "; 
				$donnees =array(":idtroc"=>$idtroc);
				$select = $this->unPDO->prepare($requete); 
				$select->execute ($donnees); 
				$unTroc = $select->fetch(); //une seule Categorie
				return $unTroc;
			}
		}
		public function updateTroc ($tab){
			$requete="update troc set nom_t = :nom_t, nbr_objet=:nbr_objet, annee=:annee where idtroc=:idtroc ;"; 
			$donnees=array(
						":nom_t"=>$tab['nom_t'],
						":nbr_objet"=>$tab['nbr_objet'],
						":annee"=>$tab['annee'],
						":idtroc"=>$tab['idtroc']
						);
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ($donnees); 
		}
		public function countTroc () {
			$requete ="select count(*) as nb from troc ;";
			$select = $this->unPDO->prepare ($requete); 
			$select->execute ();
			return $select->fetch();
		}

	public function verifConnexion ($email,$mdp)
	{
		if ($this->unPDO != null){
			$requete ="select * from user where email=:email and mdp = :mdp; "; 
			$donnees=array(":email"=>$email, ":mdp"=>$mdp); 
			$select = $this->unPDO->prepare($requete);
			$select->execute ($donnees); 
			$user = $select->fetch(); 
			return $user;
		}
		else{
			return null;
			} 
	}

	public function insertUser($tab)
		{
			if ($this->unPDO != null){
				$requete ="insert into user VALUES(:nom,:prenom,:email, :mdp,:role); ";
				$donnees =array(":nom"=>$tab['nom'],
								":prenom"=>$tab['prenom'],
								":email"=>$tab['email'],
								":mdp"=>$tab['mdp'],
								":role"=>$tab['role']);
				$insert = $this->unPDO->prepare($requete); 
				$insert->execute ($donnees); 
			}
		}
	}
?>


















