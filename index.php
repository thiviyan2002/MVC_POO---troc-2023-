<?php
	session_start();
	require_once("controleur/controleur.class.php"); 
	require_once("controleur/config_bdd.php"); 
	//instanciation du controleur 
	$unControleur = new Controleur($serveur, $bdd, $user, $mdp); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gestion Troc objets enfants</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
</head>
<body>
<center>
	<h1> Gestion Troc objets enfants</h1>

	<?php 
		$user = null; 
		if( ! isset ($_SESSION['email'])){
			require_once("vue/vue_connexion.php");
		}

		if (isset($_POST['seConnecter'])){
			$email = $_POST['email']; 
			$mdp = $_POST['mdp']; 
			$user = $unControleur->verifConnexion($email, $mdp); 
			if ($user == null){
				echo "<br> Vérifier vos identifiants ou mdp";
			}
			else {
				echo "<br> Bienvenue ".$user['nom'];
				$_SESSION['email'] = $user['email']; 
				$_SESSION['nom'] = $user['nom'];
				$_SESSION['role'] = $user['role'];
			}
		}
	if(isset($_SESSION['email'])){
	echo '
	<a href="index.php?page=0">
		<img src="images/home.png" height="100" width="100">
	</a>
	<a href="index.php?page=1">
		<img src="images/categorie.png" height="100" width="100">
	</a>
	<a href="index.php?page=2">
		<img src="images/objet.png" height="100" width="100">
	</a>
	<a href="index.php?page=3">
		<img src="images/enfant.png" height="100" width="100">
	</a>
	<a href="index.php?page=4">
		<img src="images/troc.png" height="100" width="100">
	</a>

	<a href="index.php?page=5">
		<img src="images/deconnexion.png" height="100" width="100">
	</a>

	';
	
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 0 ; 
	}
	switch ($page) {
		case 0 : require_once("home.php");break;
		case 1 : require_once("categorie.php");break;
		case 2 : require_once("objets.php");break;
		case 3 : require_once("enfants.php");break;
		case 4 : require_once("trocs.php");break;
		case 5 :
			session_destroy(); 
			unset($_SESSION['email']);
			header("Location: index.php"); 
		break;
	}
	} //fin du if session 
	?>
</center>
<footer class="sol"><center>Présenter par Thiviyan, Maxime et Aïmane</center></footer>
</body>
</html>