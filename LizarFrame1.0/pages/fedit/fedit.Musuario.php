<?php include_once ('../../.lib/_varentorno.php'); include (CF_VISTA);  include (CF_USUARIO);?> 
<?php
$vist = new Vista();
$vist -> cargarValidacionText();
$vist -> cargarCss('_estilo.0');

if(isset($_GET['Guardar'])){
	$usu = new Musuario();
	$usu -> cnomusu=$_GET['cnomusu'];
	$usu -> capepatusu=$_GET['capepatusu'];
	$usu -> capematusu=$_GET['capematusu'];
	$usu -> cmailusu=$_GET['cmailusu'];
	$usu -> ipkcodusu=$_GET['codusu'];
	$usu -> codusuEditor =$_SESSION['USUARIO'];
	if($usu -> editarUsuario ()){
		$vist -> alerta ("Se modificaron los datos del Usuario satisfatoriamente.");
		$vist -> referencia ("../flist/flist.Musuario.php");
    }
}
else
{
	$usu = new Musuario();
	$usu -> ipkcodusu= $_GET['codusu'];
	$listusu = $usu -> obtenerUsuario ();
	$vist -> assign('USUARIO', $listusu);
	$vist -> assign('codusu', $_GET['codusu']);
}
$vist -> assign('titcab', "Editar Usuario");
$vist -> assign('load', $vist -> load("capepatusu")); 
?>
<?php include_once(CF_TPL);?>