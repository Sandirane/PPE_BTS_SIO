<?php
require '../util/PDO.php';
$pdo = new Connexion();
$mdp = sha1($_POST['user_mdp']);
$email = $_POST['user_email'];
$rep = $pdo->verif_user($email, $mdp);
session_start();

if($rep != NULL)
{
	$_SESSION['user_id'] = $rep['user_id'];
	$_SESSION['user_nom'] = $rep['user_nom'];
	$_SESSION['user_prenom'] = $rep['user_prenom'];
	$_SESSION['user_email'] = $rep['user_email'];
	$_SESSION['user_tel'] = $rep['user_tel'];
	$_SESSION['user_rue'] = $rep['user_rue'];
	$_SESSION['user_cp'] = $rep['user_cp'];
	$_SESSION['user_ville'] = $rep['user_ville'];
	$_SESSION['user_mdp'] = $rep['user_mdp'];
	$_SESSION['user_admin'] = $rep['user_admin'];

	echo "1";
}
else
{
	echo "0";
}
?>