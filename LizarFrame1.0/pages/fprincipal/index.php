<?php include_once ('../../.lib/_varentorno.php');  include (CF_VISTA);  ?>
<?php
//Objeto de la vista.
$vist = new Vista(CD_NOMBREAPLICACION,CD_NOMBREDESARROLLADOR,CD_NOMBRECARPETA,1);
$vist -> cargarCss('_estilo.0');
$vist -> assign ('popup', $vist -> getPopup());
$vist -> assign ('titulo', $vist -> getNombreVentana());
$vist -> assign ('desarrollador', $vist -> getNombreDesarrollador());
?>
<?php include_once(CF_TPL);?>