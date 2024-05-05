<h3>Ajout d'un nouveau Etudiant</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom  </td>
			<td><input type="text" name="nom"></td>
		</tr>
		<tr>
			<td>Prénom  </td>
			<td><input type="text" name="prenom"></td>
		</tr>
		<tr>
			<td>Adresse  </td>
			<td><input type="text" name="adresse"></td>
		</tr>
		<tr>
			<td>Email  </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td> Classe  </td>
			<td>
			<select name="idclasse">
				<?php
				foreach ($lesClasses as $uneClasse) {
					echo "<option value='"; 
					echo $uneClasse['idclasse']; 
					echo "'>"; 
					echo $uneClasse['nom']; 
					echo "</option>";
				}
				?>
			</select>
			</td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"> </td>
			<td><input type="submit" name="Valider" value="Valider"></td>
		</tr>
	</table>
</form>