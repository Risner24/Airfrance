<h2>Liste des Etudiants</h2>
<table border ='1'>
	<tr> 
		<td> Id Etudiant </td> 
		<td> Nom  </td>
		<td> prénom </td> 
		<td> Adresse  </td> 
		<td> Email  </td> 
		<td> Id Classe  </td> 
	<tr> 
	<?php
	foreach ($lesEtudiants as $unEtudiant) {
		echo "<tr>"; 
		echo "<td>".$unEtudiant['idetudiant']."</td>"; 
		echo "<td>".$unEtudiant['nom']."</td>"; 
		echo "<td>".$unEtudiant['prenom']."</td>"; 
		echo "<td>".$unEtudiant['adresse']."</td>"; 
		echo "<td>".$unEtudiant['email']."</td>";
		echo "<td>".$unEtudiant['idclasse']."</td>"; 
		echo "<tr/>";
	}
	?>
</table>