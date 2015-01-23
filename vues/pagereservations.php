<div data-role="page" id="pagereservations">
<?php
    include "vues/entetepage.php";
?>
<div data-role="content" id="divliste"> 
    <ul data-role="listview" id="lstreservations" >
<?php
    foreach ($mesReservations as $uneReservation){  
?>
           <li id="<?php echo $uneReservation['idReserv'] ?>">
               <a href ="#pageunereservation" >
                   Séjour du <?php echo $uneReservation['Date_Arrivee']." au ".
                    $uneReservation['Date_Depart'];?> </a> 
           </li>
<?php 
    } //fin foreach
?>
    </ul>
    </div><!-- /content -->
<?php    
    include "vues/pied.html";
?>
</div> <!-- /page -->