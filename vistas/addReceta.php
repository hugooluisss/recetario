<?php
global $smarty;
include( '../../../config/config.inc.php' );
include( '../../../header.php' );

$smarty->display( dirname(__FILE__) . '/addReceta.tpl' );
 
include( '../../../footer.php' );
?>