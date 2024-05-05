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
	<title>Gestion scolarité</title>
	<meta charset="utf-8">
</head>
<body>
<center>
	<h1> Gestion de la scolarité d'IRIS</h1>

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
				echo "<br> Vérifier vos identifiants";
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
		<img src="images/classe.png" height="100" width="100">
	</a>
	<a href="index.php?page=2">
		<img src="images/etudiant.png" height="100" width="100">
	</a>
	<a href="index.php?page=3">
		<img src="images/professeur.png" height="100" width="100">
	</a>
	<a href="index.php?page=4">
		<img src="images/enseignement.png" height="100" width="100">
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
		case 1 : require_once("classes.php");break;
		case 2 : require_once("etudiants.php");break;
		case 3 : require_once("professeurs.php");break;
		case 4 : require_once("enseignements.php");break;
		case 5 :
			session_destroy(); 
			unset($_SESSION['email']);
			header("Location: index.php"); 
		break;
	}
	} //fin du if session 
	?>
</center>
</body>
</html>