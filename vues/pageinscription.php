<div data-role="page" data-transition="flow" id="pageinscription">
<?php
include "vues/entetepage.php";
include "vues/logo.php";
?>
	<div data-role="content" id="divinscription">  
		<div data-role="fieldcontain">
			<label for="login">Adresse e-mail </label>
			<input type="text" name="user_email" value="" id="login" />
			
			<label for="login">Mot de passe </label>
			<input type="password" name="user_mdp" value="" />
			
			<label for="login">Confirmation du mot de passe </label>
			<input type="password" name="user_mdp2" />
			
			<label for="login">Prénom </label>
			<input type="text" name="user_prenom" value="" />
			
			<label for="login">Nom </label>
			<input type="text" name="user_nom" value="" />
			
			<label for="login">Téléphone </label>
			<input type="text" name="user_tel" value="" />
			
			<label for="login">Rue </label>
			<input type="text" name="user_rue" value="" />
			
			<label for="login">Code Postal </label>
			<input type="text" name="user_cp" value="" maxlength="5" />
			
			<label for="login">Ville </label>
			<input type="text" name="user_ville" value="" />
		</div>
		<div id="message"></div>
		<p>
			<a href="#" data-theme="b" data-role="button" id="btninscription" >Inscription</a>
			<a href="index.php?a=accueil" data-theme="b" data-role="button" id="btnretour" >Retour à l'accueil</a>
		</p>
	</div><!-- /content -->
	
<?php
   include "vues/pied.html";
?>
</div> <!-- /page -->