<?php session_start();  ?>
<?php  include_once ('../../.lib/_varentorno.php'); include (CF_VISTA);
$vist = new Vista ();
$vist ->  alerta("Cerrando Sesión.");
unset($_SESSION['USUARIO']);
unset($_SESSION['NOMBRE']);
session_destroy();
$vist ->  cerrarVentanaPrincipal();
?>