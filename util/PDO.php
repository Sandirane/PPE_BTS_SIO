<?php
class Connexion extends PDO
{
    /**
     *  Constructeur qui hérite du constructeur de la classe PDO
     */
    public function __construct()
    {
        $this->sgbd = 'mysql';
        $this->hote = 'localhost';
        $this->bd = 'cvven';
        $this->user = 'root';
        $this->pass = 'root';
        $dns = $this->sgbd.':dbname='.$this->bd.";host=".$this->hote;
        
        //Appel du constructeur parent
        parent::__construct($dns, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "UTF8"'));
    }
    
	// Inscription d'un nouvel utilisateur dans la base de données
    public function ajouter_user($user_mdp, $user_prenom, $user_nom, $user_email, $user_tel, $user_rue, $user_cp, $user_ville)
    {
		$this->query('INSERT INTO user VALUES ("","'.$user_mdp.'","'.$user_prenom.'","'.$user_nom.'","'.$user_email.'","'.$user_tel.'","'.$user_rue.'","'.$user_cp.'","'.$user_ville.'","1")') or die("erreur de requête !");
    }
    
	// Modification du mot de passe d'un utilisateur dans la base de données
    public function modifierMDP($user_id, $user_mdp)
    {
		$this->query('UPDATE user SET user_mdp = "'.$user_mdp.'" WHERE user_id = "'.$user_id.'"') or die("erreur de requête !");
    }
    
	// Vérification de l'existance dans la base de données de l'utilisateur qui essaye de se connecter
    public function verif_user($user_email, $user_mdp)
    {
		$req1 = $this->query('SELECT * FROM user WHERE user_email = "'.$user_email.'" AND user_mdp = "'.$user_mdp.'"') or die("erreur de requête !");
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
	
	// Récupération des types d'hébergement dans la base de données
    public function type_hebergement()
    {
		$req1 = $this->query('SELECT * FROM hebergement ORDER BY hebergement_etage') or die("erreur de requête !");
		
		$valeurs = "";
		while($result = $req1->fetch())
		{
			$valeurs .= '<option value="'.$result['hebergement_id'].'">'.$result['hebergement_type'].'</option>';
		}
        return $valeurs;
    }
	
	// Ajout d'une réservation dans la base de données
	public function ajouter_reservation($date_debut, $date_fin, $nb_personne, $menage, $etat, $user_id, $type, $date)
    {
		$this->query('INSERT INTO reservation VALUES ("","'.$date_debut.'","'.$date_fin.'","'.$nb_personne.'","'.$menage.'","'.$etat.'","'.$user_id.'")') or die("erreur de requête !");
		$req1 = $this->query('SELECT reservation_id FROM reservation WHERE reservation_date_arrivee = "'.$date_debut.'" AND reservation_date_depart = "'.$date_fin.'" AND reservation_nb_personnes = "'.$nb_personne.'" AND reservation_menage = "'.$menage.'" AND reservation_etat = "'.$etat.'" AND reservation_user_id = "'.$user_id.'"');
		$result = $req1->fetch();
		$reservation_id = $result['reservation_id'];
		
		$this->query('INSERT INTO attribuer_hebergement VALUES ("'.$reservation_id.'","'.$type.'","'.$date.'")') or die("erreur de requête !");
    }
}
?>
