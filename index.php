<!DOCTYPE html>
<html>
	<head>
		<title>EXO PARAM</title>
	</head>
	<body>
		<?php

			if (isset($_GET['nom']) && issert($_GET['prenom'])){
			echo $_GET['nom'] . "<br/>" . $_GET ['prenom'];
			}
			echo "<br/>";

				/*Exo 1 ic dessus*/

			if (isset($_GET['age'])){
				echo $_GET['age'] . "<br/>";
			}
			else{
				echo "Il n'y a pas de paramètre d'age.";
			}
			echo "<br/>";

				/*Exo 2 ci dessus*/

			if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
				echo $_GET['dateDebut'] . "<br/>" . $_GET['dateFin'];
			}
			echo "<br/>";

				/*Exo 3 ci dessus*/

			if (isset($_GET['langage']) && isset($_GET['serveur'])){
				echo $_GET['langage'] . "<br/>" . $_GET . "<br/>";
			}	
			echo "<br/>"; 

				/*Exo 4 ci dessus*/

			if (isset($_GET ['semaine'])){
				echo $_GET['semaine'] . "<br/>";
			}
			echo "<br/>";

				/*Exo 5 ci dessus*/
			if (isset($_GET['batiment']) && isset($_GET['salle'])){
				echo $_GET ['batiment'] . "<br/>" . $_GET['salle'];
			}
			echo "<br/>";


		?>
		<br/>
		<a href ="?nom=Nemare&prenom=Jean">Ici 1</a>
		<br/>
		<a href="?dateDebut=2/05/2016&dateFin=27/11/2016">Ici 2</a>
		<br/>
		<a href="?langage=PHP&serveur=LAMP">Ici 3</a>
		<br/>
		<a href="?semaine=12">Ici 4</a>
		<br/>
		<a href="?batiment=12&salle=101">Ici 5</a>

	</body>
</html>