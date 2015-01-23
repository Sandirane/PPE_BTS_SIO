<?php
include "vues/entete.php";

if(!isset($_REQUEST['a']))
{
    $action = 'accueil';
}
else
{
    $action = $_REQUEST['a'];
}

switch($action)
{
    case 'accueil':
        include "vues/pageconnexion.php";
        include "vues/pagemenuaccueil.php";
        break;
    case 'inscription':
        include "vues/pageinscription.php";
        break;
	case 'pagemenuaccueil':
        include "vues/pagemenuaccueil.php";
        break;
    case 'gererreservations':
        //$mesReservations = getReservations();
        include "vues/pagereservations.php";
        break;
 }
?>
</body>
</html>
