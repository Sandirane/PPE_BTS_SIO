<?php
if(isset($_POST['inscription']))
{
    if($_POST['user_mdp'] != '' && $_POST['user_mdp2'] != '' && $_POST['user_prenom'] != '' && $_POST['user_nom'] != '' && $_POST['user_email'] != '' && $_POST['user_tel'] != '' && $_POST['user_rue'] != '' && $_POST['user_cp'] != '' && $_POST['user_ville'] != '')
    {
        if($_POST['user_mdp'] == $_POST['user_mdp2'])
        {
            // Je vais crypter le mot de passe.
            $user_mdp = sha1($_POST['user_mdp']);

            require('PDO.php');
            $c=new Connexion();
            $c->ajouter($user_mdp, $_POST['user_prenom'], $_POST['user_nom'], $_POST['user_email'], $_POST['user_tel'], $_POST['user_rue'], $_POST['user_cp'], $_POST['user_ville']);
            header('Location: connexion.php');
            exit();
            $erreur = "<br/><br/><br/><br/><div style='font-size: 30px; text-align: center;'>Inscription réussi !</div>";
        }
        else
        {
            $erreur = "<br/><br/><br/><br/><div style='font-size: 30px; text-align: center; color: red;'>La confirmation de mot de passe ne correspond pas avec le mot de passe !</div>";
        }
    }
    else
    {
        $erreur = "<br/><br/><br/><br/><div style='font-size: 30px; text-align: center; color: red;'>Tous les champs sont obligatoires !</div>";
    }
}
?>
