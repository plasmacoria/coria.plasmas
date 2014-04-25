<?// Serveur
$serveur = "mysql51-59.perso";
// Login
$login = "coriaplanews";
// Mot de passe
$mdp = "LvUJ4Zkp";
// Base de donnée
$bdd = "coriaplanews";
$connexion = mysql_connect($serveur,$login,$mdp);  
$db = mysql_select_db($bdd, $connexion);
?>