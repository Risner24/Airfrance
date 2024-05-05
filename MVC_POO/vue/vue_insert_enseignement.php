<h3>Ajout d'un nouvel Enseignement</h3>
<form method="post">
	<table>
		<tr>
			<td>Matière  </td>
			<td><input type="text" name="matiere"></td>
		</tr>
		<tr>
			<td>Nb Heures  </td>
			<td><input type="text" name="nbheures"></td>
		</tr>
		<tr>
			<td>Coeff  </td>
			<td><input type="text" name="coeff"></td>
		</tr>
		<tr>
			<td>Année  </td>
			<td><input type="text" name="annee"></td>
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
			<td> Professeur  </td>
			<td>
			<select name="idprofesseur">
				<?php
				foreach ($lesProfesseurs as $unProfesseur) {
					echo "<option value='"; 
					echo $unProfesseur['idprofesseur']; 
					echo "'>"; 
					echo $unProfesseur['nom']; 
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