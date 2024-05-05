<h2>Liste des professeurs</h2>
<table border ='1'>
	<tr> 
		<td> Id Professeur </td> 
		<td> Nom Prof </td>
		<td> prénom </td> 
		<td> Diplôme  </td> 
		<td> Email  </td> 
	<tr> 
	<?php
	foreach ($lesProfesseurs as $unProf) {
		echo "<tr>"; 
		echo "<td>".$unProf['idprofesseur']."</td>"; 
		echo "<td>".$unProf['nom']."</td>"; 
		echo "<td>".$unProf['prenom']."</td>"; 
		echo "<td>".$unProf['diplome']."</td>"; 
		echo "<td>".$unProf['email']."</td>"; 
		echo "<tr/>";
	}
	?>
</table>