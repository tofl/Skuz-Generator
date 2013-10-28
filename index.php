<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>SKUZ GENERATOR</title>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<div id="header">
			<h1>SKUZ GENERATOR</h1>
		</div>

		<div id="main_wrapper">
			<div id="scuz">
				<?php
					$a1 = array('Hier', 'Hier soir', 'Cette nuit', 'La nuit dernière');
					$string1 = rand(0, 3);
					echo $a1[$string1]. ', ';

					$a2 = array('alors que', 'pendant que', 'au moment où', 'quand', 'lorsque');
					$string2 = rand(0, 4);
					echo $a2[$string2] . ' ';

					$a3 = array('je relisais mon cours de la veille', 'je lisais le journal Le Monde', 'je m\'exerçais en mathématiques', 'je me renseignais sur la reproduction des grenouilles', 'je me renseignais sur le PIB de la Somalie', 'je lisais le roman Germinal d\'Émile Zola', 'je lisais le dictionnaire', 'je regardais un reportage sur la tyrannie du gourou Wakakaki dans sa secte');
					$string3 = rand(0, 7);
					echo $a3[$string3] . ', ';

					$a4 = array('un incendie a eut lieu', 'un cambrioleur est venu', 'un tremblement de terre a eut lieu', 'un raz de marrée s\'est produit', 'une tornade est arrivée', 'une explosion nucléaire a eut lieu', 'l\'immeuble s\'est effondré', 'l\'inspecteur Harry Callahan est arrivé');
					$string4 = rand(0, 7);
					echo $a4[$string4] . ' ';

					$a5 = array('et a détraqué mon réveil', 'et a cassé mon réveil', 'et a retardé mon réveil', 'et a éteind mon réveil', 'et m\'a tué', 'et a débranché mon réveil', 'et m\'a hypnotisé pour que je loupe les cours');
					$string5 = rand(0, 6);
					echo $a5[$string5] . '.';
				?>
			</div>
			<div class="bouton"><a href="" id="bouton">Générer une nouvelle excuse</a></div>
		</div>
	</body>
</html>








