$(function()
{
/*********************************** Connexion************************************/  
    $('#btnconnexion').click( function(e)
    {
        // les deux lignes annulent le comportement par défaut du clic
        // c'est à dire href="#" qui provoquerait un rappel de la même page
        e.preventDefault();
        e.stopPropagation();
        var mdp = $("#mdp").val(); //récupère le contenue de la zone d'id mdp
        var email = $("#login").val();

        /* appel d'une fonction ajax */
        // elle prend 3 arguments :
        // 1- le nom de la fonction php qui sera exécutée
        // 2- la liste des arguments à fournir à cette fonction
        // 3- le nom de la fonction JS qui sera exécutée au "retour" du serveur 
        $.post("ajax/traiterconnexion.php",{
                // valorise les deux arguments passés à la fonction traiterconnexion
                "user_mdp" : mdp,        
                "user_email" : email},
                foncRetourConnexion);
    });
     /* fonction JS qui sera exécutée après le retour de l'appel ajax précedent */
     // le paramètre data représente la donnée envoyée par le serveur
     // résultat de l'appel de la fonction retourConnexion.php
    function foncRetourConnexion(data)
    {
        if(data != "0")
        {
            // charge la page (data-role=page) du même document dont l'id  est le sélecteur indiqué
            $.mobile.changePage("index.php?a=pagemenuaccueil");
        }
        else
        {
            // sinon affichage d'un message dans la div d'id message  
            //$("#message").html("erreur de login et/ou mdp");
            alert("Email ou mot de passe incorrect !");
        }
    }

/*********************************** Déconnexion************************************/  
    $('#btndeconnexion').click( function(e)
    {
        // les deux lignes annulent le comportement par défaut du clic
        // c'est à dire href="#" qui provoquerait un rappel de la même page
        e.preventDefault();
        e.stopPropagation();

        $.post("ajax/traiterdeconnexion.php",
                // valorise les deux arguments passés à la fonction traiterdeconnexion
                foncRetourDeconnexion);
    });
	 /* fonction JS qui sera exécutée après le retour de l'appel ajax précedent */
     // le paramètre data représente la donnée envoyée par le serveur
     // résultat de l'appel de la fonction retourConnexion.php
    function foncRetourDeconnexion(data)
    {
        if(data != "0")
        {
            // charge la page (data-role=page) du même document dont l'id  est le sélecteur indiqué
            $.mobile.changePage("index.php");
        }
        else
        {
            // sinon affichage d'un message dans la div d'id message  
            //$("#message").html("erreur de login et/ou mdp");
            alert("Une erreur est survenue !");
        }
    }

/*********************************** Inscription************************************/  
    $('#btninscription').click( function(e)
    {
        // les deux lignes annulent le comportement par défaut du clic
        // c'est à dire href="#" qui provoquerait un rappel de la même page
        e.preventDefault();
        e.stopPropagation();
        var email = $("#email").val();
        var mdp = $("#mdp").val();
        var mdp2 = $("#mdp2").val();
        var prenom = $("#prenom").val();
        var nom = $("#nom").val();
        var tel = $("#telephone").val();
        var rue = $("#rue").val();
        var cp = $("#cp").val();
        var ville = $("#ville").val();

        /* appel d'une fonction ajax */
        // elle prend 3 arguments :
        // 1- le nom de la fonction php qui sera exécutée
        // 2- la liste des arguments à fournir à cette fonction
        // 3- le nom de la fonction JS qui sera exécutée au "retour" du serveur 
        $.post("ajax/traiterinscription.php",{
                // valorise les deux arguments passés à la fonction traiterconnexion
                "user_email" : email,
                "user_mdp" : mdp,
                "user_mdp2" : mdp2,
                "user_prenom" : prenom,
                "user_nom" : nom,
                "user_tel" : tel,
                "user_rue" : rue,
                "user_cp" : cp,
                "user_ville" : ville},
                foncRetourInscription);
    });
     /* fonction JS qui sera exécutée après le retour de l'appel ajax précedent */
     // le paramètre data représente la donnée envoyée par le serveur
     // résultat de l'appel de la fonction retourConnexion.php
    function foncRetourInscription(data)
    {
        if(data != "0")
        {
            // charge la page (data-role=page) du même document dont l'id  est le sélecteur indiqué
            $.mobile.changePage("index.php?a=accueil");
        }
        else
        {
            // sinon affichage d'un message dans la div d'id message  
            //$("#message").html("erreur de login et/ou mdp");
            alert("Un des champs n'est pas rempli !");
        }
    }



