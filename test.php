<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Page Test</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
</head>
<body>
 
<div data-role="page" id="main" data-theme="b">
 
    <div data-role="header" data-theme="b">
        <h1>Accueil page de Test SESSION</h1>
    </div><!-- /header -->
 
    <div data-role="content" >   
        <h3>Quelle est la valeur de la variable de session en ce moment ?</h3>
        <p>La valeur de la variable de session nommée 'user' est
        <?php echo '-> '.$_SESSION['user'];?></p>
        <hr />
        <p style="color:#C00;">Je ne vois jamais "toto" inscrit ci-dessus ... Why ?</p>
        <ul data-role="listview" data-theme="b">
        <li><a href="#page2">Page2: Voir les articles</a></li>
        <li><a href="#page3">Page3: Créer une variable de session</a></li>
        <li><a href="#page4">Page4: Dézinguer la variable de session</a></li>
        </ul>
    </div><!-- /content -->
</div><!-- END page MAIN-->
 
 
<div data-role="page" id="page2" data-theme="b">
 
    <div data-role="header" data-theme="b">
        <h1>Depuis cette page tu peux causer</h1>
    </div><!-- /header -->
 
    <div data-role="content">
        <p>"Oh ! Le bel article ..."</p>
        <div><a href="#form" data-role="button" data-icon="plus" data-transition="slideup" id="afficheform">Ajouter un commentaire</a></div>
    </div><!-- /content -->
 
</div><!-- /page 2-->
 
<div data-role="page" id="page3" data-theme="b">
 
    <div data-role="header" data-theme="b">
        <h1>Création de SESSION</h1>
    </div><!-- /header -->
 
    <div data-role="content" >   
        <p>Dans cette page3... Je crée une variable de session nommée "user".</p>
        <p>Pour cela ... Je fais appel à php et ait mis cela dans la page 3 :<pre>
        $_SESSION['user'] = "toto";
        </pre>
        <?php $_SESSION['user']="toto"; ?>
    </div><!-- /content -->
 
</div><!-- /page 2-->
 
<div data-role="page" id="page4" data-theme="b">
 
    <div data-role="header" data-theme="b">
        <h1>Destruction de SESSION</h1>
    </div><!-- /header -->
 
    <div data-role="content">
        <p>Dans cette page4... Je dézingue toutes les variables de session.</p>
        <p>Je fais appel à ces 2 fonctions :<pre>
        $_SESSION=array() ; session_destroy();
        </pre>
        // <?php $_SESSION=array() ; session_destroy; ?>
    </div><!-- /content -->
</div><!-- /page 3-->
 
 
<!-- FORMULAIRE AJOUTER COMMENTAIRES-->
 
<div data-role="page" id="form" data-theme="b">
<div data-role="content">
 
   <form action="#" method="POST">
         
<?php
    # SI ON N EST PAS IDENTIFIE ... ON AFFICHE TOUS LES CHAMPS
    if (empty($_SESSION['user']))
    {  
?>
    <div>
        <h4 class="rouge">Nom et eMail sont ceux du Forum:</h4>
        <label for="name">Nom utilisateur:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="email">eMail:</label>
        <input type="text" name="email" id="email" value=""  />
    </div>
     
 
    <div data-role="fieldcontain">
        <label for="comm">Commentaire:</label>
        <textarea cols="40" rows="4" name="comm" id="comm"></textarea>
    </div>
    <?php
    }
    else            # ON EST IDENTIFIE = ON NE PRESENTE QUE LA ZONE COMMENTAIRE ET LES BTN
    {
    ?>
    <div data-role="fieldcontain">
        <?php echo '<h4 class="rouge">'.$_SESSION['user'].' vous pouvez participer !</h4>';  ?>
        <label for="comm">Commentaire:</label>
        <textarea cols="40" rows="4" name="comm" id="comm"></textarea>
    </div>
    <?php
    }
    ?>  
     
    <!-- On MET LES BOUTONS DANS TOUS LES CAS -->
    <div class="ui-grid-a">
        <div class="ui-block-a"><a href="#main" id="cancel" data-role="button" data-icon="delete" data-theme="d">Annuler</a></div>
        <div class="ui-block-b"><button type="submit" id="submit" data-icon="check" data-theme="b">Valider</button></div>    
    </div>
   </form>
    
  </div><!--  End content-->
</div><!-- End FORMULAIRE -->
 
</body>
</html>