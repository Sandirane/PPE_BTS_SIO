<div data-role="page" data-transition="flow" id="pagemenuaccueil">
<?php
include "vues/entetepage.php";
include "vues/logo.php";
?>
<div data-role="content" id="divinscription">    
	<div id="divmenuaccueil">
		<ul data-role="listview" > 
		  <!-- l'attribut rel="external" permet de faire appel à un lien externe sans passer par ajax -->
			<li><a href="index.php?a=gererreservations" rel="external">Gérer mes réservations</a></li>
			<li><a href="#">Faire une demande de réservation </a></li>
		</ul> 
	</div>
</div>  <!-- /content -->
<?php
include "vues/pied.html";
?>
</div><!-- /page -->
