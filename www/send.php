<?php
/**
 * Page de v�rification et d'envoi des messages
 *@author Emrah Karademir <malakief@gmail.com> original @author Bryan Helmig
 *@version 1.0
 */

// Adresse de r�ception des messages
$sendto = 'coriaplasma@gmail.com';
// Sujet du message
$subject = 'Site coria-plasmas.fr';
// Message Titre lors d'une erreur de saisie
$errormessage = 'Merci de renseigner les informations suivantes';
// Message lors d'un envoi r�ussi
$thanks = "Merci pour votre message<br />Une r�ponse dans les meilleurs d�lais vous sera apport�e.";
// Message lors d'un message frauduleux (pi�ge � Bot)
$honeypot = "Message frauduleux.";
// Messages lors de champs vides
$emptyname =  'Votre Nom';
$emptyemail = 'Votre adresse E-mail';
$emptytele = 'Votre numero de t�l�phone';
$emptymessage = 'Votre message';
// Messages lors d'une erreur de saisie
$alertname =  'Merci de bien renseigner votre Nom avec des caract�res standard';
$alertemail = 'Merci de renseigner votre adresse E-mail dans ce format: <i>nom@exemple.com</i>';
$alerttele = 'Merci de bien renseigner votre Numero de telephone dans ce format: <i>01 23 45 67 89</i>';
$alertmessage = "Votre message semble comporter des caracteres speciaux, qui sont courant dans les adresses Web, merci de verifier.";

// --------------------------- Code a ne pas toucher ci-dessous, � moins de savoir ce que vous faites ---------------------------------

// Variable contenant les messages d'alertes
$alert = '';
// Variable v�rifiant si une erreur se produit lors de la v�rification avant l'envoi du message
// Elle passe a 1 si une erreur se produit
$pass = 0;

// Fonction qui v�rifie si le num�ro comporte bien 10 chiffres
function validerNumero($tel) {
    //Retourne true s'il est valide, sinon false.
    return preg_match('`^0[1-68]([-. ]?[0-9]{2}){4}$`', $tel) ? true : false;
}


// Fonction de nettoyage des variables pour des raisons de s�curit�s
function clean_var($variable) {
    $variable = strip_tags(stripslashes(trim(rtrim($variable))));
    return $variable;
}

// Pi�ge � Bot
if ( empty($_POST['last']) ) {

    // V�rification des variables
    // Le Nom
    if ( empty($_POST['name']) ) {
	    $pass = 1;
	    $alert .= "<li>" . $emptyname . "</li>";
    } elseif ( ereg( "[][{}()*+?.\\^$|]", $_POST['name'] ) ) {
	    $pass = 1;
	    $alert .= "<li>" . $alertname . "</li>";
    }
    // Le mail
    if ( empty($_POST['email']) ) {
	    $pass = 1;
	    $alert .= "<li>" . $emptyemail . "</li>";
    } elseif ( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
	    $pass = 1;
	    $alert .= "<li>" . $alertemail . "</li>";
    }
    // Le t�l�phone
    if ( empty($_POST['tele']) ) {
	    $pass = 1;
	    $alert .= "<li>" . $emptytele . "</li>";
    } elseif (!validerNumero($_POST['tele'] ) ) {
	    $pass = 1;
	    $alert .= "<li>" . $alerttele . "</li>";
    }
    // Le message
    if ( empty($_POST['message']) ) {
	    $pass = 1;
	    $alert .= "<li>" . $emptymessage . "</li>";
    }
	    // Si une erreur d'est produit, on affiche les messages ad�quat
	    if ( $pass==1 ) {
		echo "<script>$(\".message\").hide(\"slow\").show(\"slow\"); </script>";
		echo "<h1>" . $errormessage . "</h1><br />";
		echo "<ul>";
		echo $alert;
		echo "</ul>";
	    // Si aucune erreur ne se produit ($pass = 0), on envoi le message
	    } else {
		$message = "De: " . clean_var($_POST['name']) . "\n";
		$message .= "Email: " . clean_var($_POST['email']) . "\n";
		$message .= "Telephone: " . clean_var($_POST['tele']) . "\n";
		$message .= "Message: \n\n" . clean_var($_POST['message']);
		$header = 'From:'. clean_var($_POST['email']);
		
		// Code d'envoi du mail
		mail($sendto, $subject, $message, $header);
		// javascript
		echo "<script>$(\".message\").hide(\"slow\").show(\"slow\").animate({opacity: 1.0}, 4000).hide(\"slow\"); $(':input').clearForm() </script>";
		echo "<b>" .$thanks. "</b>";
		die();
	    }
// Ici on affiche le message d'erreur du pi�ge a bot
} else {
    echo "<script>$(\".message\").hide(\"slow\").show(\"slow\"); </script>";
    echo $honeypot;
}
?>
