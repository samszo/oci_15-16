<?php
if (isset($_POST['prenom']) && 
	isset($_POST['nom']) && 
	isset($_POST['email']) && 
	isset($_POST['comment'])) {

	// Variables de formulaires
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	// Variables locales
	$auj = date('d/m/Y H:i:s');
	$dest = 'lesly.lodin@baobab-ingenierie.fr';
	$exp = 'noreply@baobab-ingenierie.fr';
	$obj = 'Demande d\'information de '.$nom.' du '.$auj;
	ini_set('SMTP', 'smtp.orange.fr');
	ini_set('sendmail_from', 'gmte93.lecmontreuil@orange.fr'); 

	// Corps du message
	$msg = '<html>';
	$msg .= '<head>';
	$msg .= '<title>'.$obj.'</title>';
	$msg .= '</head>';
	$msg .= '<body>';
	$msg .= '<p>Salut,</p>';
	$msg .= '<p>Nouvelle demande d\'information ci-dessous :</p>';
	$msg .= '<ul>';
	$msg .= '<li><strong>Pr&eacute;nom : </strong>'.$prenom.'</li>';
	$msg .= '<li><strong>Nom : </strong>'.$nom.'</li>';
	$msg .= '<li><strong>Adresse mail : </strong>'.$email.'</li>';
	$msg .= '<li><strong>Message : </strong>'.$comment.'</li>';
	$msg .= '</ul>';
	$msg .= '</body>';
	$msg .= '</html>';

	// En-tête du message
	$tete = 'MIME-Version: 1.0';
	$tete .= 'Content-Type: text/html; charset=utf-8';
	$tete .= 'From: '.$exp;
	$tete .= 'Disposition-Notification-To:'.$exp;
	$tete .= 'X-Priority: 1';
	$tete .= 'X-MSMail-Priority: High';

	// Envoi du mail
	$test = @mail($dest, $obj, $msg, $tete);
	if ($test) {
		echo 'OK : Message bien envoy&eacute;';
	} else {
		echo 'KO : Erreur dans l\'envoi du message';
	}
}
else {
	echo htmlentities('KO : Un des champs n\'est pas défini !');
}
?>







