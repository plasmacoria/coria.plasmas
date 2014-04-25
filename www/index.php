<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
  
<html>
	<head>
	<title>Le Groupe Plasmas - Accueil</title>
	<link rel="stylesheet" href="style.css"/>
	
	<!-- Jcarousel -->
	<script type="text/javascript" src="jcarousel/lib/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="jcarousel/lib/jquery.jcarousel.min.js"></script>
	
	<!-- Videobox -->
	<script type="text/javascript" src="video/js/mootools.js"></script>
	<script type="text/javascript" src="video/js/swfobject.js"></script>
	<script type="text/javascript" src="video/js/videobox.js"></script>
	<style type="text/css" media="screen">
        @import url("video/css/videobox.css");
	</style>
	
	<link rel="stylesheet" type="text/css" href="jcarousel/skins/tango/skin.css" />
	
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel({
				
			});
		});
	</script>
	</head>
	<body>
	<div id="contain">
		<div id="fk"></div>
		<div id="header"><a href="index.php"><img class="header" src="img/header.png"></a></div>
		
		
		<div id="transp"></div>
		
		<!-- MENU ... -->
		
		<div id="menu">
			<ul id="firstmenu">
				<li id="actif"><a href="index.php" class="menu">Accueil</a></li>
				<li class="separate"><img src="img/plasma_separate.png"></li>
				<li><a href="legroupe.html" class="menu">Le groupe</a></li>
				<li class="separate"><img src="img/plasma_separate.png"></li>
				<li><a href="themesrecherche.html" class="menu">Th&egrave;mes de recherche</a></li>
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
		
		<div id="main">
		
		<!-- Actualit�s ... -->
		
			<div id="actualites">
				<div id="img_actualites"></div>
					<div id="texte_actu_div">
					<?php
					
					// Connexion � la base de donn�e
					include('sql.php');
					//REQUETES
					$resultat_sql = mysql_query("SELECT * FROM news ORDER BY id DESC LIMIT 1",$connexion);
					$result = mysql_fetch_array($resultat_sql);
					//Variables
					$texte = $result['texte'];
					$titre = $result['titre'];
					$source = $result['source'];
					//ACTION
					$position1 = strpos($texte, "<img");    // position du "<"
				    $position2 = strpos($texte, "/>");   // position du ">"
				    /*$position3 = strpos($texte, "<iframe");
				    $position4 = strpos($texte, "/>");*/
				    while($position2 > $position1)
				    {          // tant que le ">" est bien derri�re "<" 
				        $texte_debut = substr($texte, 0, $position1);  // $texte du d�but jusqu'� "<"
				        $position2+=2;
				        $texte_fin = substr($texte, $position2);            // $texte de ">" jusqu'� la fin de chaine
				        $texte = $texte_debut.$texte_fin;                    // concat�nation des deux chaines (debut et fin)
				        $position1 = strpos($texte, "<img");    // position du "<"     // r�-initialisation du $position1 et $position2 pour savoir si on quitte la boucle (s'il y a une autre image, dans le texte, � supprimer)
				        $position2 = strpos($texte, "/>");   // position du ">"
				    }
				    $texte = substr($texte, 0, 329);
				    echo($titre . ' par : <font color="#3fb20f">' . $source . '</font><br /><br />');
				    echo nl2br($texte .' ...');
				    
					
					?>
					</div>

				<div id="ensavoirplus"><a class="url_ext" href="news.php">En savoir plus ...</a></div>
			</div>
			
			<!-- LE GROUPE ... -->
			
			<div id="groupe">
				<div id="img_groupe"></div>
					<?php
					$Nom = array(
					"<div id='texte_groupe'><p class='texte_main'>Julien <font color='red'>Annaloro</font><br /><br /> Doctorant CNES &#8211; R&eacute;gion Haute-Normandie <br /><br /> <a class='url_ext' href='entreeatmo.html'>- Entr&eacute;es atmosph&eacute;riques</a></p></div><div id='apercu_photo'><img class='id_apercu' src='img/id/plasma_julien.png' /></div>"
					
					,"<div id='texte_groupe'><p class='texte_main'>Arnaud <font color='red'>Bultel</font> <br /><br /> Ma&icirc;tre de conf&eacute;rences HDR &agrave; l'universit&eacute; de Rouen <br /><br /> <a href='interlasermatiere.html' class='url_ext'>- Interaction laser-mati&egrave;re </a><br/><a href='#.html' class='url_ext'>- Plasmas de bord dans les r&eacute;acteurs de fusion</a><br/><a class='url_ext' href='entreeatmo.html'>- Entr&eacute;es atmosph&eacute;riques </a></div><div id='apercu_photo'><img class='id_apercu' src='img/id/plasma_arnaud.png' /></div>"
					
					,"<div id='texte_groupe'><p class='texte_main'>Pascal <font color='red'>Boubert</font><br /><br /> Ma&icirc;tre de conf&eacute;rences HDR &agrave; l'universit&eacute; de Rouen <br /><br /> <a class='url_ext' href='entreeatmo.html'>- Entr&eacute;es atmosph&eacute;riques </a><br/><a class='url_ext' href='procedesplasma.html'>- Proc&eacute;d&eacute;s plasmas </a></div><div id='apercu_photo'><img class='id_apercu' src='img/id/plasma_pascal.png' /></div>"
					
					,"<div id='texte_groupe'><p class='texte_main'>Vincent <font color='red'>Morel</font><br /><br />Chercheur post-doctorant CNES <br /><br /><a href='interlasermatiere.html' class='url_ext'>- Interaction laser-mati&egrave;re</a><br/><a class='url_ext' href=''>- Plasmas de bord dans les r&eacute;acteurs de fusion</a><br/><a class='url_ext' href='entreeatmo.html'>- Entr&eacute;es atmosph&eacute;riques </a></div><div id='apercu_photo'><img class='id_apercu' src='img/id/plasma_vincent.png' /></div>"
					
					,"<div id='texte_groupe'><p class='texte_main'>Corinne <font color='red'>Duluard</font><br /><br />Attach&eacute;e temporaire d&#8217;enseignement et de recherche &agrave; l&#8217;INSA de Rouen. <br /><br /> <a class='url_ext' href='procedesplasma.html'>- Proc&eacute;d&eacute;s plasmas.</a> </div><div id='apercu_photo'><img class='id_apercu' src='img/id/plasma_corinne.png' /></div>"
					
					,"<div id='texte_groupe'><p class='texte_main'>Noemie <font color='red'>Br&eacute;mare</font><br /><br />Doctorante CNRS &#8211; R&eacute;gion Haute-Normandie <br /><br /><a class='url_ext' href='entreeatmo.html'> - Entr&eacute;es atmosph&eacute;riques </a><br/><a class='url_ext' href='procedesplasma.html'>- Proc&eacute;d&eacute;s plasmas </a></div><div id='apercu_photo'><img class='id_apercu' src='img/id/plasma_noemie.png' /></div>"
					);

					$affichage_aleatoire = $Nom[rand(0,5)];
					echo($affichage_aleatoire);
					
					?>
				<div id="ensavoirplus"><a class="url_ext" href="legroupe.html">En savoir plus ...</a></div>
			</div>
			
			<!-- FOCUS SUR ... -->
				
			<div id="focus">
				<div id="img_focus"></div>
				<div id="texte_focus">
					</p>
					
					<?php
					
					$themes = array(
					"L'interaction <font color='yellow'>Laser-Mati&egrave;re </font><br /><br />Dans le but de d&eacute;terminer la composition &eacute;l&eacute;mentaire d'un &eacute;chantillon, l'&eacute;quipe analyse les plasmas induits par l'absorption d'une impulsion laser nanoseconde sur la surface de l'&eacute;chantillon &eacute;tudi&eacute;. Cette analyse, r&eacute;alis&eacute;e  &agrave; l'aide de diagnostics essentiellement spectroscopiques concerne la dynamique du plasma depuis sa cr&eacute;ation jusqu'&agrave; sa recombinaison, ses &eacute;carts ...",
					"Fusion <font color='yellow'>Thermonucl&eacute;aire</font><br /><br />Afin de d&eacute;terminer les profils de temp&eacute;rature et de densit&eacute; &eacute;lectroniques dans les 10 premiers centim&egrave;tres du plasma de la machine de fusion thermonucl&eacute;aire Tore-Supra situ&eacute;e &agrave; Cadarache (Bouches du Rh&ocirc;ne), l'&eacute;quipe d&eacute;veloppe une technique de spectroscopie active par injection d'un faisceau d'h&eacute;lium. Cette technique repose sur ...",
					"Proc&eacute;d&eacute;s <font color='yellow'>plasmas</font> <br /><br />Afin d'accompagner les besoins &eacute;nerg&eacute;tiques futurs, il convient d'envisager comment r&eacute;cup&eacute;rer efficacement et proprement l'&eacute;nergie disponible autour de nous. La gaz&eacute;ification de la biomasse (d&eacute;chets verts) par plasma de dioxyde de carbone tente de r&eacute;pondre &agrave; cette double exigence en limitant qui plus est l'&eacute;mission de gaz &agrave; effet de serre.",
					"Entr&eacute;es <font color='yellow'>atmosph&eacute;riques</font><br /><br />L'onde de choc g&eacute;n&eacute;r&eacute;e lors de l'entr&eacute;e d'une sonde spatiale dans une atmosph&egrave;re plan&eacute;taire donne naissance &agrave; un plasma tr&egrave;s &eacute;nerg&eacute;tique en contact avec la paroi de l'engin. La d&eacute;termination des diff&eacute;rents flux d'&eacute;nergie permet de dimensionner au mieux le bouclier thermique. Pour cela il faut reproduire ce plasma en laboratoire et le mod&eacute;liser en d&eacute;tail"
					);
					
					$themes_aleatoire = $themes[rand(0,3)];
					echo('<p class="texte_main">');
					echo($themes_aleatoire);
					echo('</p>');
					
					?>
									
				</div>
				<div id="ensavoirplus"><a class="url_ext" href="themesrecherche.html">En savoir plus ...</a></div>
			</div>	
		</div>
		
		<!-- BANDEAU WEBDOCU -->
		
		<div id="visite"><a href="video.html"><img class="play" src="img/plasma_visite_play.png" alt="photo laboratoire"></a></div>
		
		<!-- SLIDESHO JQUERY -->
		
		<div id="slideshow">
			<h4>Nos vid�os</h4>
			<ul id="mycarousel" class="jcarousel-skin-tango">
					<li>
					<a href="http://www.youtube.com/watch?v=gAdrGxv022E" rel="vidbox" title="Proc&eacute;d&eacute;s Plasmas - Etude du Ph&eacute;nom&egrave;ne">
					<img src="img/slide/gaz_etude_phenom.png" width="75" height="75" alt="" /></a>
					</li>
					<li>
					<a href="http://www.youtube.com/watch?v=OPmyi-GYt_M" rel="vidbox" title="Interaction Laser-Mati&egrave;re - Etude du Ph&eacute;nom&egrave;ne"><img src="img/slide/laser_etude_phenom.png" width="75" height="75" alt="" /></a>
					</li>
					<li>
					<a href="http://www.youtube.com/watch?v=CGw4uj_kQOc" rel="vidbox" title="Interaction Laser-Mati&egrave;re - Explications"><img src="img/slide/laser_explications.png" width="75" height="75" alt="" /></a></li>
					<li>
					<a href="http://www.youtube.com/watch?v=vSeZ048m0ks&feature=youtu.be" rel="vidbox" title="Gazeification Explications"><img src="img/slide/gaz_explications.png" width="75" height="75" alt="Gaz�ification Explications" /></a></li>
					<li>
					<a href="http://www.youtube.com/watch?v=FmsR-wb0Cjk&feature=youtu.be" rel="vidbox" title="..."><img src="img/slide/thermo_etude_phenome.png" width="75" height="75" alt="fusion thermonucleaire - Explication du ph�nom�ne" /></a></li>
					</li>
					<li>
					<a href="http://www.youtube.com/watch?v=0P7Hm_LCyGA&feature=youtu.be" rel="vidbox" title="Gazeification resultat"><img src="img/slide/gaz_resultats.png" width="75" height="75" alt="Gazeification - resultats" /></a> 
					</li>
					<li>
					<a href="http://www.youtube.com/watch?v=yCvWU4E4EyQ&feature=youtu.be" rel="vidbox" title="Entrees atmospheriques - etude du phenomene"><img src="img/slide/atmo_etude_phenom.png" width="75" height="75" alt="Entrees atmospherique - etude du phenomene" /></a></li>
					<li>
					<a href="http://www.youtube.com/watch?v=MWukSsTGr_4&feature=youtu.be" rel="vidbox" title="fusion thermonucleaire - explication"><img src="img/slide/Thermo_explications.png" width="75" height="75" alt="fusion thermonucleaire - explications" /></a></li>
					<li>
					<a href="http://www.youtube.com/watch?v=zc7dTpv5fF0&feature=youtu.be" rel="vidbox" title="entrees atmospheriques - explications"><img src="img/slide/atmo_explications.png" width="75" height="75" alt="" /></a></li>
					<li>
					<a href="http://www.youtube.com/watch?v=9IKKnDE16FU&feature=youtu.be" rel="vidbox" title="Entrees atmospheriques - resultats"><img src="img/slide/Atmo_resultats.png" width="75" height="75" alt="" /></a></li>
					<li>
					<a href="http://www.youtube.com/watch?v=ujwZoQZGroE" rel="vidbox" title="interraction laser-matieres - resultats"><img src="img/slide/laser_resultat.png" width="75" height="75" alt="" /></a></li>
					<li>
					<a href="http://www.youtube.com/watch?v=-OCXqzZt1cs&feature=youtu.be" rel="vidbox" title="fusion thermonucleaire - modelisation"><img src="img/slide/thermo_modelisation.png" width="75" height="75" alt="" /></a></li>
			</ul>
		</div>
		
		
		<div id="separateurbas"></div>
		<div id="bas">
			<div id="url">
				<br/>
				<table class="url">
					<tr>
						<td> <img src="img/plasma_puces.png"> </td>
						<td> <a class="url_ext" target="_blank" href="http://www.coria.fr/">CORIA</a>  </td>
					</tr>
					<tr>
						<td> <img src="img/plasma_puces.png"> </td>
						<td> <a class="url_ext" target="_blank" href="http://www.cnrs.fr/">CNRS</a> </td>
					</tr>
						
					<tr>
						<td> <img src="img/plasma_puces.png"> </td>
						<td> <a class="url_ext" target="_blank" href="http://www.insa-rouen.fr/">INSA</a> </td>
					</tr>
					<tr>
						<td> <img src="img/plasma_puces.png"> </td>
						<td> <a class="url_ext" target="_blank" href="http://www.univ-rouen.fr/">Universit&eacute; Rouen</a> </td>
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
		<center><p class="texte_bas">MG LM TR � - Tous droits r&eacute;serv&eacute;s - <a class="url_ext" href="admin.php">Administration</a></p></center>
	</div>
	
	</body>
</html>