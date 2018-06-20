<?php
$PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
$PARAM_mot_passe='root'; // mot de passe de l'utilisateur pour se connecter
$PARAM_hote='localhost'; //nom de l'hote MySQL
$PARAM_dbname='assistance'; //nom de l'hote MySQL

try{
	$db = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_dbname,$PARAM_utilisateur, $PARAM_mot_passe,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
	
	echo 'Erreur';
	exit;
}
?>