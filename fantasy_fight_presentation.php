<!--Maquette de la page Fantasy Fight par Sophie Blanchard-->
<!DOCTYPE html>
<html>
    <head>
	<meta charset = "utf-8"/>
	<link rel="stylesheet" type="text/css" href="ff_style.css" />
	<title>Fantasy Fight</title>
    </head>
	
    <body>
	
	<header>
	     <?php include("en_tete.php"); ?>
		 <?php include("menu.php"); ?>
	</header>
	
	    <h1>Présentation</h1>
		    <h2>Qui suis-je ?</h2>
			    <p><span class="pseudo">Aphios</span>, de mon vrai nom <strong>Sophie Blanchard</strong>.<br /> Je suis une autodidacte en
				développement informatique et j'entame une reconversion pour devenir développeuse web.</p>
			<h2>Le projet Fantasy Fight</h2>
			    <p><em>Fantasy Fight</em> est mon <mark>premier projet</mark> autonome. Il s'agit d'un jeu de combat
				old-school développé avec Python 3 et Pygame. On y incarne un héros de <a href="#game">fantasy</a> prêt à combattre des ennemis.</p>
				<p class="dessous">Le jeu propose une interface graphique en 2D avec musique et sons. J'ai créé l'ensemble des éléments graphiques.</p>
				<p>Le jeu se joue via le clavier pour saisir des choix et la souris pour appuyer sur des boutons.</p>
		<h1>Comment jouer ?</h1>
		    <p>Il vous suffit de télécharger <a href="https://github.com/Aphios/Fantasy_fight/blob/master/Fantasy_fight_fr.7z" target="blank">ce fichier</a> et de 
			l'exécuter en double-cliquant dessus.</p>
			<p>Une version anglaise est aussi disponible <a href="https://github.com/Aphios/Fantasy_fight/blob/master/fantasy_fight_en.zip" target="blank">ici.</a></p>
		<h1>Autres informations</h1>
		    <p>Ce jeu est diffusé librement, sous licence Creative Commons CC-BY-NC.<br />Cela signifie
			que vous pouvez le réutiliser, le diffuser, le développer, en créditant l'auteur, sans usage commercial
			et en respectant les droits moraux de l'oeuvre originale.</p>
			<p>Pour retrouver le projet sur Github, <a href="https://github.com/Aphios/Fantasy_fight" 
			title="Pour voir le code source du projet" target="blank">rendez-vous ici</a></p>
		<h1 id="game">Le jeu en détail</h1>
			<p>Les personnages que vous incarnerez sont des espèces fantaisistes de l'univers du RPG :</p>
			<ul>
			    <li>Banshee</li>
				<li>Githzerai</li>
				<li>Tieflin</li>
				<li>Illithid</li>
				<li>Rakshasa</li>
			</ul>
			
	    <footer>
		    <?php include("bas_page.php"); ?>
		</footer>
				    
    </body>
</html>