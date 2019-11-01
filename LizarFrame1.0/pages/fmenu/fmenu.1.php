<?php include_once ('../../.lib/_varentorno.php'); include (CF_VISTA);  include (CF_MENU);?>
<?php
$vist = new Vista ();
$vist -> cargarCss('_estilo.0');
$vist -> cargarCss('_estilo.arbol');
$menu = new Mmenu ();
$menu  -> ipkcodusu = $_SESSION['USUARIO'];
$listmenu = $menu   -> dibujarMenu ();  

//Asignar variables para la vista.
$vist -> assign ('MENU',$listmenu);
?>
<?php include_once(CF_TPL);?>