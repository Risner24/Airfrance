<h2>Gestion des professeurs</h2>

<?php
	
	require_once ("vue/vue_insert_professeur.php"); 

	if(isset($_POST['Valider'])){
		$unControleur->insertProfesseur($_POST); 
	}	
	$lesProfesseurs = $unControleur->selectAllProfesseurs(); 
	
	require_once ("vue/vue_les_professeurs.php"); 
?>
