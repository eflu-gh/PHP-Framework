<?php session_start(); include_once ('../../.lib/_varentorno.php'); include (CF_VISTA);  ?>
<?php
//Objeto de la vista.
$vist = new Vista(CD_NOMBREAPLICACION,CD_NOMBREDESARROLLADOR,CD_NOMBRECARPETA);
$vist -> cargarCss('_estilo.1');
$vist -> cargarCss('_estilo.0');
$vist -> assign ('popup', $vist -> getPopup());
$vist -> assign ('nombreAplicacion', $vist -> getNombreAplicacion());
$vist -> assign ('desarrollador', $vist -> getNombreDesarrollador());
$vist -> assign ('usuario', $_SESSION['NOMBRE']);
?>
<?php include_once(CF_TPL);?>
