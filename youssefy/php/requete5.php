<?php

if ((isset($_POST['prenom'])) && (isset($_POST['nom'])) && 	(isset($_POST['email'])) && (isset($_POST['comment']))){
	if ((!empty($_POST['prenom'])) &&(!empty($_POST['nom'])) &&	(!empty($_POST['email'])) &&(!empty($_POST['comment']))
	){
		$prenom=$_POST['prenom'];
		$nom=$_POST['nom'];
		$email=$_POST['email'];
		$comment=$_POST['comment'];
// 		variable local
		$auj = date('d/m/Y H:i:s');
		$dest='youssef.boulouard@gmail.com';
		$exp='youssef.boulouard@gmail.com';
		$obj='Demande d\'informaion:'.$nom.'du'.$auj;
		//smtp pour fai
		ini_set('SMTP', 'smtp.orange.fr');
		ini_set('SMTP', 'smtp.orange.fr');
		// corp du message
		$msg='<html>';
		$msg.='<head>';
		$msg.='<title>'.$obj.'</title>';
		$msg.='</head>';		
		$msg.='<body>';
		$msg.='<p>salut,</p>';
		$msg.='<p>la nouvelle demande</p>';
		$msg.='<ul>';
		$msg.='<li> prenom:'.$prenom.'</li>';
		$msg.='<li>nom: '.$nom.'</li>';
		$msg.='<li> adresse mail: '.$email.'</li>';
		$msg.='<li>message: '.$comment.'</li>';
		$msg.='</ul>';
		$msg.='</body>';
		$msg.='</html>';
		//en-tete du message
		$tete='MINE-version: 1.0';		
		$tete.='content-type: text/html; charset=utf-8';
		$tete.='from: '.$exp;
		$tete.='Disposition_Notification-to:'.$exp;
		$tete.='X-Priority: 1';
		$tete.='X-MSMail-Priority: high';
		
		//envoi mail
		$test = true;
		$test = @mail($dest, $obj, $msg, $tete);
		if($test){
			echo 'OK : message bien envoier';
		}
		else {
			echo 'KO : Erreur dans l\'envoi du message';
		}
		
	//echo htmlentities($prenom.'  '.$nom.'  '.$email.'  '.$comment);
	}
	else 
	{
		echo htmlentities('Erreur: une des champs est vide');
		
	}
}
?>