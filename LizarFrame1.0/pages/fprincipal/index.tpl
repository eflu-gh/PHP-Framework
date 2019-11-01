<div id=splashScreen><img src="../../.res/_img/_opt/preload.gif" width="40" height="40" align="absmiddle"> <font face="Tahoma, Geneva, sans-serif" style="font-size:12px">Cargando datos, espere por favor...</font></div>
{php}flush();{/php}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$titulo}</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript" type="text/javascript" src="../../.js/_ventana.js"></script>
</head>
<body link="#0000ff" vlink="#0000ff" alink="#0000ff" onLoad="popUp('{$popup}');" scroll="no">
<div align="center">
<p></p>
<p><a href="javascript:" onClick="popUp('{$popup}');"></a></p>
<p><a href="javascript:" onClick="popUp('{$popup}');"><img src="../../.res/_img/_opt/link.png" width="16" height="16" border="0" align="absmiddle" /> Haga click aqu&iacute; para ingresar al sistema</a><br />
  <br />
  <br />
<br />
<br />
{$titulo}  &copy;2010</p>
<p><span class="Estilo5"><br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  Powered by: {$desarrollador} -
todos los derechos reservados  &copy;2010 <br />
Resoluci&oacute;n recomendada 1024 x 768 pixeles</span><br />
<br />
</p>
</div>
</body>
</html>
<script language=javascript>
document.getElementById("splashScreen").style.display="none";
</script>
