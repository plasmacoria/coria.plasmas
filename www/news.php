<html>
	<head>
	<title>Le Groupe Plasmas - Actualit&eacute;s</title>
	<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<div id="contain">
			<div id="header">
			<a href="index.php"><img class="header" src="img/header.png"></a>
			</div>					
			<div id="transp"></div>	
			<div id="menu">		
				<ul id="firstmenu">				
					<li class="test"><a href="index.php" class="menu">Accueil</a></li>
					<li class="separate"><img src="img/plasma_separate.png"></li>				
					<li><a href="legroupe.html" class="menu">Le groupe</a></li>				
					<li class="separate"><img src="img/plasma_separate.png"></li>			
					<li id="actif"><a href="themesrecherche.html" class="menu">Th&egrave;mes de recherche</a></li>	
					<li class="separate"><img src="img/plasma_separate.png"></li>				
					<li><a href="collaboration.html" class="menu">Collaborations</a></li>			
					<li class="separate"><img src="img/plasma_separate.png"></li>			
					<li><a href="publication.html" class="menu">Publications</a></li>				
					<li class="separate"><img src="img/plasma_separate.png"></li>			
					<li><a href="rejoindre.html" class="menu">Rejoindre l'&eacute;quipe</a></li>	
					<li class="separate"><img src="img/plasma_separate.png"></li>			
					<li><a href="contact.php" class="menu">Contact</a></li>			
				</ul>					
			</div>			
			<div id="main2" style="text-align:center;">		
				<?// Include de la connexion sql			
					include('sql.php') ; 		
					// Requete sql pour récupérer les news			
					$requete_news = mysql_query("SELECT * FROM news ORDER BY id DESC",$connexion);			
					$news = mysql_num_rows($requete_news);			
				?>			
				<h1>Actualit&eacute;s</h1>			
				<?			
				$i = 0;			while ($i < $news) {			
				// Variables date	
				$date = mysql_result($requete_news,$i,"date");			
				$annee = date("Y", $date);			
				$mois = date("m", $date);			
				$jour = date("d", $date);			
				$heure = date("H", $date);			
				$minute = date("i", $date);			
				$date = $jour."/".$mois."/".$annee." &agrave; ".$heure."h".$minute;			
				// Autres variables		
				$titre = mysql_result($requete_news,$i,"titre");		
				$source = mysql_result($requete_news,$i,"source");		
				$texte = mysql_result($requete_news,$i,"texte");			
				// Affichage de la news //			
				// Titre		
				echo '<table border="0"  width="800" style="margin-left:100px;"><tr><td width="50%" colspan="2" ><center><span style="color:white;font-size:15pt;">'.$titre.'</span></center><br /></td></tr>';			
				// Date & source	
				echo '<tr><td width="50%"><span style="color:white;font-size:10pt;">News ajout&eacute;e le '.$date.' <br />par : '.$source.'</span><br /><br /></td>';			
				// Texte		
				echo '<tr><td colspan ="2" ><span style="color:white;">'.nl2br($texte).'</span></td></tr></table><br /><hr style="width:700px;" />			<br /><br /><br />';			$i++; }			?>		
			</div>					
			<div id="visite2">
				<a href="visite.html"><img class="play2" src="img/plasma_visite_play.png"></a>
			</div>					
			<br>		
			<div id="bas">			
				<div id="url">				
				<br/>				
				<table class="url">					
					<tr>						
						<td> <img src="img/plasma_puces.png"> </td>		
						<td> <a class="url" href="http://www.coria.fr/">CORIA</a>  </td>	
					</tr>					
					<tr>						
						<td> <img src="img/plasma_puces.png"> </td>				
						<td> <a class="url" href="http://www.cnrs.fr/">CNRS</a> </td>			
					</tr>	
					<tr>					
						<td> <img src="img/plasma_puces.png"> </td>		
						<td> <a class="url" href="www.insa-rouen.fr">INSA</a> </td>			
					</tr>				
					<tr>						
						<td> <img src="img/plasma_puces.png"> </td>			
						<td> <a class="url" href="http://www.univ-rouen.fr/">Universit&eacute; Rouen</a> </td>		
					</tr>			
				</table>		
			</div>

			
      <div id="texte_merci">
        <p class="texte_merci">Ce site a enti&egrave;rement &eacute;t&eacute; &eacute;labor&eacute; par des &eacute;tudiants de l'IUT de Rouen (76) en Services et R&eacute;seaux de Communication.<br />
        L'&eacute;quipe plasma du laboratoire CORIA souhaite remercier :<br />
        - Marie Godard pour les vid&eacute;os et photos qui alimentent le site,<br />
        - L&eacute;na&iuml;c Moroni pour la cr&eacute;ation du site web et<br />
        - Thomas Richard pour l'inclusion du web-docu.<br />
        Nous remercions &eacute;galement les encadrants :<br />
        - Gregory Chaudemanche pour avoir supervis&eacute; ce projet et<br />
        - Olivier Gautier pour son implication lors des tournages.</p>
      </div>

		
    </div>



    <br />
        <!-- FOOTER -->
        
			<div id="footer"></div>		
				<center><p class="texte_bas">MG LM TR © - Tous droits r&eacute;serv&eacute;s - <a class="url_ext" href="admin.php">Administration</a></p></center>					
			</div>		
</body>
</html>
