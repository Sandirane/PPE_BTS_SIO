<?php

/*
 *  code non encore écrit qui retournera le login s'il est présent en base 
 *  ou une chaine vide sinon
 */
function verifuser($login, $mdp)
{
	$req1 = $this->query("SELECT * FROM user WHERE user_email = '".$user_email."' AND user_mdp = '".sha1($user_mdp)."'") or die("erreur de requête !");
	$nb = $req1->rowCount();

	if($nb == 1)
	{
	    $result = $req1->fetch();
	    return $result;
	}
	else
	{
	    return NULL;
	}
}

/* 
 * retourne un tableau trié des réservations 
 * (à remplir avec les données de la base)
 */
function getReservations()
{
    $tab=array(
			array( "idReserv"=>1,
				   "Date_Arrivee"=>"2014-05-10",
					"Date_Depart"=>"2014-05-14",
				   "Nb_Personnes"=>3,
					"Menage"=>0,
					"EtatReservation"=>"Demande",
					"idUtil"=>1),
			array( "idReserv"=>2,
				   "Date_Arrivee"=>"2014-07-14",
					"Date_Depart"=>"2014-07-30",
				   "Nb_Personnes"=>6,
					"Menage"=>1,
					"EtatReservation"=>"Demande",
					"idUtil"=>3)
    );
    return $tab;
}
?>
