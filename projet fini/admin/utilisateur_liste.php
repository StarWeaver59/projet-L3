<html>
    <head>
		<link rel="stylesheet" href="../Style2.css">
    </head>
   
    <body>
		<h1>Liste utilisateur</h1>
        <center>
			<table>
				<tr>
				<td> id </td>
				<td> nom </td>
				<td> prenom</td>
				<td> mail </td>
				<td> mdp </td>
				<td> d_naissance </td>
				</tr>
				<?php
					include("../inc/connexion.php");
					include("../classes/utilisateur.php");
					$u = new Utilisateur();
					$new2 = $u->get_liste($bdd);
					foreach ($new2 as $new3){
						echo "<tr>";
						echo "<td>".$new3->get_id()."</td>";
						echo "<td>".$new3->get_nom()."</td>";
						echo "<td>".$new3->get_prenom()."</td>";
						echo "<td>".$new3->get_mail()."</td>";
						echo "<td>".$new3->get_mdp()."</td>";
						echo "<td>".$new3->get_dnaissance()."</td>";

						echo "</tr>";	
					}						
				?>
			</table>
			<a href ="utilisateur_ajout.php"> lien ajout utilisateur</p></a>
		</center>
    </form>
    </body>
</html>