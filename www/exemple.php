<?php
/**
 * Page Installation et démo
 *@author Emrah Karademir
 *@version 1.0
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <title>Formulaire de contact simple et facile a mettre en place par Emrah Karademir Malakief.com</title>
        <link rel="stylesheet" type="text/css" href="stylesform.css" />
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<style type="text/css">
        .clear {
          zoom: 1;
          display: block;
        }
        </style>        
        <![endif]-->
    </head>
    <body>
    	<section id="page">
            <header>
                <hgroup>
                    <h3>Formulaire de contact simple et facile, PHP5, JQuery</h3>
                </hgroup>
            </header>
            <section id="articles">
                <article id="Demonstration">
                    <h2>Demo</h2>
                    <div class="line"></div>
                    <h1>Formulaire de contact PHP5, JQuery</h1>
                    <?php
                        require_once('classes/form.php');
                        $form = new Form();
                        $form->affiche_form();
                    ?>
                </article>
            </section>
        <footer>
           <p>Emrah Karademir - Malakief.com</p>
        </footer>
	</section>
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
    </body>
</html>