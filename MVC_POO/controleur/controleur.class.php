<?php
	require_once ("modele/modele.class.php");
	class Controleur {
		private $unModele ; 
		//instance de la classe Modele

		public function __construct ($serveur, $bdd, $user, $mdp){
			//instanciation de la classe Modele 
			$this->unModele = new Modele ($serveur, $bdd, $user, $mdp);
		} 

		public function selectAllClasses (){
			$lesClasses = $this->unModele->selectAllClasses(); 
			//on fait traiter les données 

			return $lesClasses; 
		}

		public function selectSearchClasses ($mot){
			$lesClasses = $this->unModele->selectSearchClasses($mot); 
			return $lesClasses;
		}

		public function insertClasse ($tab)
		{
			//appliquer des controles sur les données 

			$this->unModele->insertClasse($tab);
		}


		public function deleteClasse ($idclasse)
		{
			//on controle la presence de l'id 
			$this->unModele->deleteClasse($idclasse); 
		}
		public function updateClasse ($tab)
		{
			$this->unModele->updateClasse($tab); 
		}
		public function selectWhereClasse ($idclasse)
		{
			//on controle la presence de l'id 
			return $this->unModele->selectWhereClasse($idclasse); 
		}

		public function selectAllProfesseurs (){
			$lesProfesseurs = $this->unModele->selectAllProfesseurs(); 
			//on fait traiter les données 

			return $lesProfesseurs; 
		}
		public function insertProfesseur ($tab)
		{
			//appliquer des controles sur les données 

			$this->unModele->insertProfesseur($tab);
		}
		public function selectAllEtudiants (){
			$lesEtudiants = $this->unModele->selectAllEtudiants(); 
			//on fait traiter les données 

			return $lesEtudiants; 
		}
		public function insertEtudiant ($tab)
		{
			//appliquer des controles sur les données 

			$this->unModele->insertEtudiant($tab);
		}
		public function selectAllEnseignements (){
			$lesEnseignements = $this->unModele->selectAllEnseignements(); 
			//on fait traiter les données 

			return $lesEnseignements; 
		}
		public function insertEnseignement ($tab)
		{
			//appliquer des controles sur les données 

			$this->unModele->insertEnseignement($tab);
		}

		public function verifConnexion ($email,$mdp)
		{
			$user = $this->unModele->verifConnexion ($email,$mdp); 
			return $user;
		}
	}

?>









