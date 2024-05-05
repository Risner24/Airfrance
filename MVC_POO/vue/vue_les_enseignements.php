<h2>Liste des Enseignements</h2>
<table border ='1'>
	<tr> 
		<td> Id Enseignement </td> 
		<td> Matière  </td>
		<td> Nb Heures </td> 
		<td> Coeff   </td> 
		<td> Année  </td> 
		<td> Id Classe  </td> 
		<td> Id Professeur  </td> 
	<tr> 
	<?php
	foreach ($lesEnseignements as $unEnseignement) {
		echo "<tr>"; 
		echo "<td>".$unEnseignement['idenseignement']."</td>"; 
		echo "<td>".$unEnseignement['matiere']."</td>"; 
		echo "<td>".$unEnseignement['nbheures']."</td>"; 
		echo "<td>".$unEnseignement['coeff']."</td>"; 
		echo "<td>".$unEnseignement['annee']."</td>";
		echo "<td>".$unEnseignement['idclasse']."</td>";
		echo "<td>".$unEnseignement['idprofesseur']."</td>"; 
		echo "<tr/>";
	}
	?>
</table>