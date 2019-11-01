<?php session_start(); include_once ('../../.lib/_varentorno.php'); include_once (CF_USUARIO); include (CF_VISTA);?> 
<?php
$vist = new Vista();
$vist -> cargarValidacionText();
$vist -> cargarCss('_estilo.0');

if(isset($_GET['Guardar'])){
	$usu = new Musuario();
	$usu -> ipkcodusu=$_GET['codusu'];
	$listusu = $usu -> obtenerUsuario ();

	if ( $listusu[0]['codusu'] and ( $listusu[0]['clavusu'] == $_GET['cclavusu']) and ( $_GET['clavnew1'] == $_GET['clavnew2']) ){
		$usu -> cclavusu = $_GET['clavnew1'];	
		$usu -> editarClaveUsuario ();
		$vist -> alerta("Su clave se actualizo satisfactoriamente.");
		$codusu = $_GET['codusu'];	
		$vist -> referencia ("fedit.clave.usuario.php?codusu=$codusu");
	}
	else{
		$vist -> alerta("Problemas con la informacion suministrada.");
		$codusu = $_GET['codusu'];	
		$vist -> referencia ("fedit.clave.usuario.php?codusu=$codusu");
	}
	
}
else{
	$usu = new Musuario();
	$usu -> ipkcodusu= $_SESSION['USUARIO'];

	$listusu = $usu -> obtenerUsuario ();
	$vist -> assign('USUARIO', $listusu);
	$vist -> assign('codusu', $_SESSION['USUARIO']);
}
$vist -> assign('titcab', "Cambiar Clave");
$vist -> assign('load', $vist -> load("cclavusu")); 
?>
<?php include_once(CF_TPL);?>