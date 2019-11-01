<?php include_once ('../../.lib/_varentorno.php'); include (CF_VISTA); include (CF_USUARIO);?>
<?php 
//Controlador para el logueo de los usuarios.
$vist = new Vista(CD_NOMBREAPLICACION,CD_NOMBREDESARROLLADOR,'',1);
$vist -> titvist = "Login";
$vist -> cargarCss('_estilo.login');
$vist -> cargarValidacionText();

function enviarEmail($nombreAplicacion,$usuario,$email,$clave,$deCorreo,$aCorreo){
	$url = "http://" . $_SERVER["SERVER_NAME"] .  ":8082/www.mycloudstorage.com/pages/fprincipal/validar.usuario.php?email=$email&act=1";
	
	$msg = "<html>
	<title></title>
	<body>
	<p><em><strong></strong></em></p>
	<p>Estimado (a) {$usuario}</p>
	<p>Bienvenido a {$nombreAplicacion}, a nombre de nuestro equipo de trabajo le damos las gracias por su registro:</p>
	<p>Sus credenciales para ingresar al portal de {$nombreAplicacion} son:</p>
	<p><strong>Email:</strong> $email</p>
	<p><strong>Clave: </strong>$clave</p>
	<p>Para validar su registro por favor haga clic  <strong><a href='$url'>aqu&iacute;</a></strong> o el siguiente v&iacute;nculo puede copiarlo y pegarlo en su navegador:</p>
	<p><a href='$url'>$url</a></p>
	<p><em><strong>{$nombreAplicacion}</strong></em></p>
	</body>
	</html>";
	
	$headers  = "MIME-Version: 1.0 \n";
	$headers .= "From: $deCorreo \n";
	$headers .= "Reply-To: $deCorreo \n";
	$headers .= "Return-Path: $deCorreo \n";
	$headers .= "X-Sender: $deCorreo \n";
	$headers .= "X-Priority: 0 \n";
	$headers .= "X-Mailer: {$nombreAplicacion}." . phpversion() . " \n";
	$headers .= "Content-type: text/html; charset=iso-8859-1 \n";
	$asunto   = "Registro de usuario en $nombreAplicacion"; 	 //<:~ armando el correo ~:>
	mail($aCorreo, $asunto, $msg, $headers); 	
}


if($_POST['capepatusu']){
	$usu = new Musuario ();
	$usu -> capepatusu  = $_POST['capepatusu'];
	$usu -> capematusu  = $_POST['capematusu'];
	$usu -> cnomusu     = $_POST['cnomusu'];
	$usu -> cnomemp     = $_POST['cnomemp'];
	$usu -> cmailusu    = $_POST['cmailusu'];
	$usu -> cclavusu    = $_POST['cclavusu'];
	if(!$usu -> validarExistenciaUsuario()){
		if($usu -> crearUsuarioAdministrador()){
			$vist -> alerta ('Su usuario fue creado satisfactoriamente, revise su email para activar su cuenta.');
			$usuario = $usu -> cnomusu." ".$usu -> capepatusu." ".$usu -> capematusu;
			$email = $usu -> cmailusu;
			$clave = $usu -> cclavusu;
			$deCorreo = "info@lizarFrame";
			$aCorreo = $usu -> cmailusu;
			enviarEmail($vist -> getNombreAplicacion(),$usuario,$email,$clave,$deCorreo,$aCorreo);
			$vist -> referencia ('registrar.usuario.php');
		}
		else
			$vist -> msje = "Problemas con la información suministrada.";
	}
	else{
		$vist -> alerta ('El usuario que desea registrar ya se encuentra en nuestra base de datos.');
		$vist -> referencia ('registrar.usuario.php');
	}
}
$vist -> assign('titulo', $vist  -> nomvent);
$vist -> assign('tituloVista', $vist  -> titvist);
$vist -> assign('desarrollador', $vist  -> getNombreDesarrollador()); 
$vist -> assign ('nombreAplicacion', $vist -> getNombreAplicacion());
$vist -> assign('mensaje', $vist  ->  msje);
?>
<?php include_once(CF_TPL);?>