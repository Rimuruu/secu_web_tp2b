<form method="post" action="">
<table>
<tr><td>Nom</td><td><?php echo "$row[nom] $row[prenom]"; ?></td></tr>
<tr><td>Modifier:</td><td>
</td></tr>
</table>
<p> Nom: <input type="text" name="nom" value="<?php echo $row['nom']?>" /></p>
<p> Prénom: <input type="text" name="prenom" value ="<?php echo $row['prenom']?>" /></p>
<p> Age <input type="number" name="age" value="<?php echo $row['age']?>" /></p>
<input type="submit" value="Envoyer" />
</form>