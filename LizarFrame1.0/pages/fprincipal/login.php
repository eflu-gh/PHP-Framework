<?php include_once ('../../.lib/_varentorno.php'); include (CF_VISTA); include (CF_USUARIO);?>
<?php 
//Controlador para el logueo de los usuarios.
$vist = new Vista(CD_NOMBREAPLICACION,CD_NOMBREDESARROLLADOR,'',1);
$vist -> titvist = "Login";
$vist -> cargarCss('_estilo.login');
$vist -> cargarValidacionText();
$vist -> cargarJs('_ventana');

if(!$_POST['cmailusu'])
	$vist -> assign('load', $vist  ->  load('cmailusu'));
if($_POST['cmailusu']){
	//Llamar a la función que verifica si se encuentra o no el usuario en la base de datos.
	$usu = new Musuario ();
	$usu -> cmailusu = $_POST['cmailusu'];
	$usu -> cclavusu  = $_POST['cclavusu'];
	if($usu -> validarUsuario()){
		$usu -> ipkcodusu = $_SESSION['USUARIO'];
			$vist -> load =  "openwindowmain('estructura.html')";
			$vist -> assign('load', $vist  ->  load);

	}
	else
		$vist -> msje = "Problemas con la información suministrada.";
}
$vist -> assign('titulo', $vist  -> nomvent);
$vist -> assign('tituloVista', $vist  -> titvist);
$vist -> assign('desarrollador', $vist  -> getNombreDesarrollador());
$vist -> assign('aplicacion', $vist  -> getNombreAplicacion()); 
$vist -> assign('mensaje', $vist  ->  msje);
?>
<?php include_once(CF_TPL);?>