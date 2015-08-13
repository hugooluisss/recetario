<?php
global $smarty;
include( '../../../config/config.inc.php' );
include( '../../../header.php' );

$smarty->display( dirname(__FILE__) . '/listaRecetas.tpl' );
 
include( '../../../footer.php' );
?>