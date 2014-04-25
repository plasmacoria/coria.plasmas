<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
	<head>
	<title>Le Groupe Plasmas - contact</title>
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="stylesform.css" />
    <script type="text/javascript" src="jquery/jquery-latest.pack.js"></script>
        <script type="text/javascript" src="jquery/jquery.form.js"></script>
        <script type="text/javascript">
        $(document).ready(function() { 
        var options = { 
        target:        '#alert'
        }; 
        $('#contactForm').ajaxForm(options); 
        }); 
        
        $.fn.clearForm = function() {
          return this.each(function() {
                var type = this.type, tag = this.tagName.toLowerCase();
                if (tag == 'form')
                  return $(':input',this).clearForm();
                if (type == 'text' || type == 'password' || tag == 'textarea')
                  this.value = '';
                else if (type == 'checkbox' || type == 'radio')
                  this.checked = false;
                else if (tag == 'select')
                  this.selectedIndex = -1;
          });
        };
        
        </script>
	</head>
	<body>
	<div id="contain">
	
		<div id="fk"></div>
		<div id="header"><a href="index.php"><img class="header" src="img/header.png"></a></div>
		
		
		<div id="transp"></div>
		
		
		<div id="menu">
			<ul id="firstmenu">
				<li class="test"><a href="index.php" class="menu">Accueil</a></li>
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
				<li id="actif"><a href="contact.php" class="menu">Contact</a></li>
			</ul>
			
		</div>
			
			
		<div id="main2">

			<?php
			require_once('classes/form.php');
			$form = new Form();
			$form->affiche_form();
			?>
			<center>
			<table style="margin-top:30px; color:white; ">
				<tr>
					<td></td>
					<td><center>Coordonn&eacute;es Postale : </center></td>

				</tr>
				<tr>
					<td rowspan="2"><img src="img/coria.png"/></td>
					<td style="padding:5px;">
						<center>
						CNRS UMR 6614 - CORIA
						<br />
						Universit&eacute; de Rouen
						<br />
						Site Universitaire du Madrillet
						<br />
						BP 12
						<br />
						76801 SAINT ETIENNE DU ROUVRAY CEDEX
						</center>
					</td>
				</tr>
			</table>
			</center>
			<br />
		</div>
		
		
		<div id="visite2"><a href="video.html"><img class="play2" src="img/plasma_visite_play.png"></a></div>
			
		<br>
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
						<td> <a class="url_ext" target="_blank" href="www.insa-rouen.fr">INSA</a> </td>
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
		<center><p class="texte_bas">MG LM TR &copy; - Tous droits r&eacute;serv&eacute;s - <a class="url_ext" href="admin.php">Administration</a></p></center>
		
		
	</div>
	
	</body>
</html>