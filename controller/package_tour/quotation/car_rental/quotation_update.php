<?php 
include "../../../../model/model.php"; 
include "../../../../model/package_tour/quotation/car_rental/quotation_update.php"; 

$quotation_update = new quotation_update;
$quotation_update->quotation_master_update();
?>
