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
	$exp = 'f.greta106@laposte.net';
	$obj = 'Demande d\'information de '.$nom.' du '.$auj;

	// Include et instanciation
	require '../PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	
	// Paramétrage de l'objet
	$mail->SMTPDebug = 3; // Enable verbose debug output
	$mail->isSMTP(); // Set mailer to use SMTP
	$mail->Host = 'smtp.laposte.net'; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = $exp; // SMTP username
	$mail->Password = 'Secret106'; // SMTP password
	$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587; // TCP port to connect to
	
	// Ajout des destinataires
	$mail->From = $exp;
	$mail->FromName = 'Webmaster';
	$mail->addAddress($dest, 'Lesly BOULOT'); // Add a recipient
	$mail->addAddress('lesly.lodin@free.fr'); // Name is optional
	$mail->addReplyTo('reply@greta.fr', 'Information');
	$mail->addCC('cc@greta.fr');
	$mail->addBCC('bcc@greta.fr');	
	
	// Ajout pièces jointes
	$mail->addAttachment('../docs/diagramme_gantt.xls'); // Add attachments
	$mail->addAttachment('../pics/logo.png', 'Logo ANIDIOO'); // Optional name
	
	// Corps du message
	$mail->isHTML(true); // Set email format to HTML
	$mail->Subject = $obj;
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
	$mail->Body = $msg;
	$mail->AltBody = 'Message en texte plat si HTML n\'est pas compatible avec le messenger.';
	
	// Envoi du mail	
	if(!$mail->send()) {
	    echo 'OK : Message bien envoy&eacute;';
	} else {
	    echo 'KO : Erreur dans l\'envoi du message';
	}
}
else {
	echo htmlentities('KO : Un des champs n\'est pas défini !');
}
?>







