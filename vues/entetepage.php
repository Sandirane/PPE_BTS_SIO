<?php
// Si on n'est pas sur les pages 'accueil', 'pagemenuaccueil' et 'inscription'
if(isset($_SESSION['user_id']) && (isset($_GET['a']) && $_GET['a'] != 'accueil' && $_GET['a'] != 'pagemenuaccueil' && $_GET['a'] != 'inscription'))
{
?>
    <div class="ui-grid-b ui-responsive" data-role="header" data-theme="a" data-position="fixed">
        <div class="ui-block-a"><a href="index.php?a=accueil" rel="external"><input data-icon="home" data-theme="b" data-iconpos="left" value="Retour" type="button" /></a></div>
        <div class="ui-block-b">CVVEN</div>
        <div class="ui-block-c"><a href="index.php?a=accueil" rel="external"><input data-icon="delete" data-theme="b" data-iconpos="right" id="btndeconnexion" value="Déconnexion" type="button"></a></div>
    </div>
<?php
}
// Si on est sur la page 'accueil'
else if(isset($_GET['a']) && $_GET['a'] == 'accueil')
{
?>
    <div class="ui-grid-solo ui-responsive" data-role="header" data-theme="a" data-position="fixed">
        <div class="ui-block-a">CVVEN</div>
    </div>
<?php
}
// Si on est sur la page 'inscription'
else if(isset($_GET['a']) && $_GET['a'] == 'inscription')
{
?>
    <div class="ui-grid-solo ui-responsive" data-role="header" data-theme="a" data-position="fixed">
        <div class="ui-block-a">CVVEN</div>
    </div>
<?php
}
else
{
?>
    <div class="ui-grid-b ui-responsive" data-role="header" data-theme="a" data-position="fixed">
        <div class="ui-block-a" style="visibility: hidden;"><a href="index.php?a=accueil" rel="external"><input data-icon="home" data-theme="b" data-iconpos="left" value="Retour" type="button" /></a></div>
        <div class="ui-block-b">CVVEN</div>
        <div class="ui-block-c"><a href="index.php?a=accueil" rel="external"><input data-icon="delete" data-theme="b" data-iconpos="right" id="btndeconnexion" value="Déconnexion" type="button"></a></div>
    </div>
<?php
}
?>