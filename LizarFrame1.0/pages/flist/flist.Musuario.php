<?php include_once ('../../.lib/_varentorno.php'); include(CF_USUARIO); include (CF_VISTA); ?> 
<?php 
$vist = new Vista ();
$vist -> cargarCss('_estilo.0');

//Crear el objeto usuario.
$usu = new Musuario();

$usu -> ifkcodten = $_SESSION['TENANT'];
if($_GET['Buscar'] && ($_GET['cnomusu'])){
	$usu -> cnomusu = $_GET['cnomusu'];	
	$cnomusu = $_GET['cnomusu'];	
	$listusu = $usu -> buscarUsuario();
}
else{
	$listusu = $usu -> listarUsuario();
}

//Asignar variables para la vista.
$vist  -> assign ('USUARIO',$listusu);
$vist -> assign('totfil',count($listusu));
$vist  -> assign ('titcab',"Lista de Usuarios");
$vist  -> assign ('fedit',$_SESSION['FEDIT']);
?>
<?php include_once(CF_TPL);?>