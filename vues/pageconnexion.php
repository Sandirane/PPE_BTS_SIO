<div data-role="page" data-transition="slidefade" id="pageconnexion">
<?php
include "vues/entetepage.php";
include "vues/logo.php";
?>
<div data-role="content" id="divconnexion">
	<div data-role="fieldcontain">
		<label for="login">Email</label>
		<input type="text" name="email" id="login" value="" />
		<label for="login">Mot de passe</label>
		<input type="password" name="mdp" id="mdp" value="" />
	</div>
	<div id="message"></div>
	<div>
		<a href="#" data-theme="b" data-role="button" id="btnconnexion" >Connexion</a>
		<a href="index.php?a=inscription" data-theme="b" data-role="button" rel="external">Vous inscrire</a>
	</div>
</div><!-- /content -->
<?php    
include "vues/pied.html";
?>
</div> <!-- /page -->