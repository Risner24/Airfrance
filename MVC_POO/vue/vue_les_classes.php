<h3>Liste des classes</h3>
<form method="post">
	Filtrer par : <input type="text" name="mot">
	<input type="submit" name="Filtrer"
	value="Filtrer">
</form>
<br/>

<table border ='1'>
	<tr> 
		<td> Id Classe </td> 
		<td> Nom Classe </td>
		<td> Salle d'études </td> 
		<td> Diplôme préparé </td> 
		<td> Opérations </td>
	<tr> 
	<?php
	foreach ($lesClasses as $uneClasse) {
		echo "<tr>"; 
		echo "<td>".$uneClasse['idclasse']."</td>"; 
		echo "<td>".$uneClasse['nom']."</td>"; 
		echo "<td>".$uneClasse['salle']."</td>"; 
		echo "<td>".$uneClasse['diplome']."</td>"; 

		echo "<td> "; 
		echo "<a href='index.php?page=1&action=sup&idclasse=".$uneClasse['idclasse']."'> <img src='images/sup.png' height='30' witdh='30'> </a>"; 

		echo "<a href='index.php?page=1&action=edit&idclasse=".$uneClasse['idclasse']."'> <img src='images/edit.jpeg' height='30' witdh='30'> </a>"; 

		echo "</td>";


		echo "<tr/>";
	}
	?>
</table>