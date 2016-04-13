<?php
// Constantes de l'application
define('APP_VERSION', '2.01');
define('BDD_HOTE', '192.168.1.40');
define('BDD_USER', 'root');
define('BDD_PASS', 'admin');
define('BDD_NAME', 'agence');

// Définit les paramètres date et heure en FRANCAIS
setlocale(LC_ALL, "fr_FR");

function majuscule($chaine) {
	return strtoupper($chaine);
}
//echo "<p>".majuscule("bonjour lesly")."</p>";

function nomPropre($chaine) {
	//	$res = strtoupper(substr($chaine,0,1));
	//	$res .= strtolower(substr($chaine,1));
	$tab=str_word_count($chaine,1);
	foreach ($tab as $cle=>$val) {
		$res .= strtoupper(substr($val,0,1));
		$res .= strtolower(substr($val,1))." ";
	}
	return $res;
}
//echo "<p>".nomPropre("bonjour mon cher tonton")."</p>";
?>