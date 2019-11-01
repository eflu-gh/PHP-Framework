<?php include_once ('../../.lib/_varentorno.php'); include (CF_VISTA); include (CF_USUARIO); include (CF_CLASES."Mrubro.php")?>
<?php 
//Controlador para el logueo de los usuarios.
$vist = new Vista(CD_NOMBREAPLICACION,CD_NOMBREDESARROLLADOR,'',1);
$vist -> titvist = "Login";
$vist -> cargarCss('_estilo.login');
$vist -> cargarValidacionText();


if($_GET['email'] && $_GET['act'] == 1){
	$usu = new Musuario ();
	$usu -> cmailusu = $_GET['email'];
	$listusu = $usu -> obtenerUsuario();
	
	if($listusu){
		$usu -> ipkcodusu = $listusu['0']['codusu'];
		if($usu -> activarUsuario()){
			$mensaje = "Su usuario ha sido activado, por favor ingrese al m&oacute;dulo de Login";
		}
	}
	else
		$mensaje = "Su usuario no se encuentra en nuestra base de datos";
}
else{
	$mensaje = "Problemas con la informaci&oacute;";
}
$vist -> assign('titulo', $vist  -> nomvent);
$vist -> assign('tituloVista', $vist  -> titvist);
$vist -> assign('desarrollador', $vist  -> getNombreDesarrollador()); 
$vist -> assign ('nombreAplicacion', $vist -> getNombreAplicacion());
$vist -> assign('mensaje', $mensaje);
?>
<?php include_once(CF_TPL);?>