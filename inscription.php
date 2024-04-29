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
<h2> Connexion au Gestion Troc objets enfants</h2>
<form method="post">
	<table>
		<tr>
			<td> Nom </td>
			<td> <input type="text" name="nom"></td>
		</tr>
		<tr>
			<td> Prenom </td>
			<td> <input type="text" name="prenom"></td>
		</tr>
		<tr>
			<td> Email </td>
			<td> <input type="text" name="email"></td>
		</tr>
		<tr>
			<td> MDP </td>
			<td> <input type="password" name="mdp"></td>
		</tr>
		<!--tr>
			<td> retaper MDP</td>
			<td> <input type="password" name="mdp_retype"></td>
		</tr-->
		<tr>
			<td> role </td>
			<td> 
				<select name="role" id="role">
                    <option value="user">user</option>
					<option value="admin">admin</option>
				</select>
			</td>
		</tr>
		<tr>
		<td class="btn-pls-vld"> <input type="reset" name="Annuler" value="Annuler"> </td>
		<td class="btn-pls-vld"> <input type="submit" name="seConnecter" value="Se Connecter"></td>
		</tr>
		<tr><a href="index.php">se connecter</a></tr>
	</table>
</form>
</center>
<?php
if (isset($_POST['seConnecter'])){
	$unControleur->insertUser($_POST);
	/*$nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $role = htmlspecialchars($_POST['role']);

	$check = $bdd->prepare('SELECT nom,prenom,email, mdp,role FROM user WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

	$user = $unControleur->verifConnexion($email, $mdp);
	if(($nom)&&($prenom)&&(filter_var($email, FILTER_VALIDATE_EMAIL))&&($mdp)&&($role)){ // si les deux mdp saisis sont bon
		$unControleur->insertUser($_POST);
		/*$cost = ['cost' => 12];
		//$mdp = password_hash($mdp, PASSWORD_BCRYPT, $cost);
						
		// On stock l'adresse IP
		$ip_user = $_SERVER['REMOTE_ADDR']; 
		echo 'vu';
		$insert = $bdd->prepare('INSERT INTO user(nom,prenom,email, mdp,role) VALUES(:nom,:prenom,:email, :mdp,:role)');
		$insert->execute(array(
			'nom' => $nom,
			'prenom' => $prenom,
			'email' => $email,
			'mdp' => $password,
			'role' => $role
		));
		header('Location:index.php');
	}else{ echo('erreur'); die();}*/
}
?>
<footer class="sol"><center>Présenter par Thiviyan, Maxime et Aïmane</center></footer>
</body>
</html>



<!--?php
if(isset($_POST['Valider'])){
	$unControleur->insertCategorie($_POST); 
}
$laCategorie = null; //classe à modifier 
if(isset($_GET['action']) && isset($_GET['idcategorie']))
{
	$action = $_GET['action'];
	$idcategorie = $_GET['idcategorie']; 
	switch ($action) {
		case 'sup': $unControleur->deleteCategorie($idcategorie); break;
		case 'edit': $laCategorie = $unControleur->selectWhereCategorie ($idcategorie) ; 
			break;
	}
}

require_once ("vue/vue_insert_categorie.php");

if(isset($_POST['Modifier'])){
	$unControleur->updateCategorie($_POST); 
	header("Location: index.php?page=1");
}

if (isset($_POST['Filtrer'])){
	$lesCategories = $unControleur->searchAllCategories($_POST['filtre']);
}else{ 
	$lesCategories = $unControleur->selectAllCategories(); 
}
require_once ("vue/vue_les_categories.php"); 
?-->
















