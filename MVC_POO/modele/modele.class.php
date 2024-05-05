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
		public function selectAllClasses (){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from classe ;  ";
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute (); 
			//extraction des données 
			$lesClasses = $select->fetchAll(); 
			//retourner les résultats 
			return $lesClasses;
		}else {
			return null; 
		}
		}

		public function selectSearchClasses ($mot){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from classe where nom like :mot or salle like :mot or diplome like :mot ;  ";
			$donnees=array(":mot"=>'%'.$mot.'%');
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute ($donnees); 
			//extraction des données 
			$lesClasses = $select->fetchAll(); 
			//retourner les résultats 
			return $lesClasses;
		}else {
			return null; 
		}
		}

		public function insertClasse ($tab)
		{
			if ($this->unPDO != null){
				$requete ="insert into classe values (null, :nom, :salle, :diplome); "; 
				$donnees =array(":nom"=>$tab['nom'],
								":salle"=>$tab['salle'], 
								":diplome"=>$tab['diplome']);
				$insert = $this->unPDO->prepare($requete); 
				$insert->execute ($donnees); 
			}
		}

		public function deleteClasse ($idclasse)
		{
			if ($this->unPDO != null){
				$requete ="delete from classe where idclasse = :idclasse ; "; 
				$donnees =array(":idclasse"=>$idclasse);
				$delete = $this->unPDO->prepare($requete); 
				$delete->execute ($donnees); 
			}
		}

		public function updateClasse ($tab)
		{
			if ($this->unPDO != null){
				$requete ="update classe set nom = :nom, salle=:salle, diplome = :diplome where idclasse =:idclasse; "; 
				$donnees =array(":nom"=>$tab['nom'],
								":salle"=>$tab['salle'], 
								":diplome"=>$tab['diplome'], 
								":idclasse"=>$tab['idclasse']);
				$update = $this->unPDO->prepare($requete); 
				$update->execute ($donnees); 
			}
		}

		public function selectWhereClasse ($idclasse)
		{
			if ($this->unPDO != null){
				$requete ="select * from classe where idclasse = :idclasse ; "; 
				$donnees =array(":idclasse"=>$idclasse);
				$select = $this->unPDO->prepare($requete); 
				$select->execute ($donnees); 
				$uneClasse = $select->fetch(); //une seule classe
				return $uneClasse;
			}
		}


		public function selectAllProfesseurs(){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from professeur ;  ";
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute (); 
			//extraction des données 
			$lesProfesseurs = $select->fetchAll(); 
			//retourner les résultats 
			return $lesProfesseurs;
		}else {
			return null; 
		}
		}

		public function insertProfesseur ($tab)
		{
			if ($this->unPDO != null){
				$requete ="insert into professeur values (null, :nom, :prenom, :diplome, :email); "; 
				$donnees =array(":nom"=>$tab['nom'],
								":prenom"=>$tab['prenom'], 
								":diplome"=>$tab['diplome'], 
								":email"=>$tab['email']);
				$insert = $this->unPDO->prepare($requete); 
				$insert->execute ($donnees); 
			}
		}

		public function selectAllEtudiants (){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from etudiant ;  ";
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute (); 
			//extraction des données 
			$lesEtudiants = $select->fetchAll(); 
			//retourner les résultats 
			return $lesEtudiants;
		}else {
			return null; 
		}
		}

		public function insertEtudiant($tab)
		{
			if ($this->unPDO != null){
				$requete ="insert into etudiant values (null, :nom, :prenom, :adresse, :email, :idclasse); "; 
				$donnees =array(":nom"=>$tab['nom'],
								":prenom"=>$tab['prenom'], 
								":adresse"=>$tab['adresse'], 
								":email"=>$tab['email'],":idclasse"=>$tab['idclasse']);
				$insert = $this->unPDO->prepare($requete); 
				$insert->execute ($donnees); 
			}
		}


		public function selectAllEnseignements (){
			if ($this->unPDO != null){
			// Exécution de la requête 
			$requete = "select * from enseignement ;  ";
			//preparation de la requete avant execution 
			$select = $this->unPDO->prepare ($requete); 
			//execution de la requete 
			$select->execute (); 
			//extraction des données 
			$lesEnseignements = $select->fetchAll(); 
			//retourner les résultats 
			return $lesEnseignements;
		}else {
			return null; 
		}
		}
	public function insertEnseignement($tab)
		{
			if ($this->unPDO != null){
				$requete ="insert into enseignement values (null, :matiere, :nbheures, :coeff, :annee, :idclasse, :idprofesseur); "; 
				$donnees =array(":matiere"=>$tab['matiere'],
								":nbheures"=>$tab['nbheures'], 
								":coeff"=>$tab['coeff'], 
								":annee"=>$tab['annee'],":idclasse"=>$tab['idclasse'], ":idprofesseur"=>$tab['idprofesseur']);
				$insert = $this->unPDO->prepare($requete); 
				$insert->execute ($donnees); 
			}
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
	}
?>


















