<?php
global $smarty;
include( '../../config/config.inc.php' );
include( '../../header.php' );
 
$smarty->display( dirname(__FILE__) . '/agregar_receta/agregar.tpl' );
 
include( '../../footer.php' );
?>