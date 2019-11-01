<?php include_once ('../../.lib/_varentorno.php'); include (CF_VISTA); include_once (CF_USUARIO);  include (CF_CLASES.'Mperfil.php'); include (CF_CLASES.'Mestado.php');?>
<?php
$vist = new Vista();
$vist -> cargarValidacionText();
$vist -> cargarCss('_estilo.0');

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

if(!$_GET['Guardar']){

	$perf = new Mperfil();
	$listperf = $perf -> listarPerfiles();
	$vist -> assign('LISTPERF', $listperf);
	unset($perf);
	$est = new Mestado();
	$listest = $est -> listarEstado();
	$vist -> assign('LISTEST', $listest);
	unset($est);
}

if(isset($_GET['Guardar'])){
	$usu = new Musuario();
	$usu -> ifkcodperf =$_GET['ifkcodperf'];
	$usu -> ifkcodalm =$_GET['ifkcodalm'];
	$usu -> ifkcodest =$_GET['ifkcodest'];
	$usu -> ifkcodten =$_SESSION['TENANT'];
	$usu -> cnomusu=$_GET['cnomusu'];
	$usu -> capepatusu=$_GET['capepatusu'];
	$usu -> capematusu=$_GET['capematusu'];
	$usu -> cclavusu=$_GET['cclavusu'];
	$usu -> cmailusu=$_GET['cmailusu'];
	$usu -> ifkcodusu = $_SESSION['USUARIO'];//El usuario que crea.
	
	if(!$usu -> validarExistenciaUsuario()){
		if($usu ->crearUsuario ()){
			$vist -> alerta ("Se creó el Usuario satisfatoriamente.");
			$usuario = $usu -> cnomusu." ".$usu -> capepatusu." ".$usu -> capematusu;
			$email = $usu -> cmailusu;
			$clave = $usu -> cclavusu;
			$deCorreo = "info@mycloudstorage.com";
			$aCorreo = $usu -> cmailusu;
			enviarEmail($vist -> getNombreAplicacion(),$usuario,$email,$clave,$deCorreo,$aCorreo);
			$vist -> referencia ("fnew.Musuario.php");
		}
		else
			$vist -> msje = "Problemas con la información suministrada.";
	}
	else{
		$vist -> alerta ('El usuario que desea registrar ya se encuentra en nuestra base de datos.');
		$vist -> referencia ('fnew.Musuario.php'); 
	}	
}
$vist -> assign('titcab', "Nuevo Usuario");
$vist -> assign('load', $vist -> load("capepatusu")); 
?>
<?php include_once(CF_TPL);?>
