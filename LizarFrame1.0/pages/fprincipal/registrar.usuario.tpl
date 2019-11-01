<!DOCTYPE HTML>
<html>
<head>
<title>{$nombreAplicacion}</title>
<script type="text/javascript">
function validarEspacioBlancoUsuario() {ldelim}
        var er = new RegExp(/\s/);
		var web = document.getElementById('cusuest').value;
		if(er.test(web)){ldelim}
			alert('No se permiten espacios en blanco.');
			return false;
		{rdelim}
                else
			return true;
   {rdelim}
function validarEspacioBlancoContrasenia() {ldelim}
        var er = new RegExp(/\s/);
		var web = document.getElementById('cclavest').value;
		if(er.test(web)){ldelim}
			alert('No se permiten espacios en blanco.');
			return false;
		{rdelim}
                else
			return true;
   {rdelim}
</script>

<body onLoad="{$load}">
  <div id="main">
    <div id="header">
      <div id="logo">
    </div>
        <div id="menubar">
        <ul id="menu">
        <li><a href="login.php">Login</a></li>
        <li  class="current"><a href="registrar.usuario.php">Registrarse</a></li>
        </ul></div>
</div>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
        <td><div id="site_content">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="70%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="352" valign="top">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="115"><div id="content">
                    <!-- insert the page content here -->
                    <h1>Ficha de Inscripci&oacute;n</h1>
                    <h2>Llene el siguiente formulario para tener acceso a {$aplicacion}.
                  </div></td>
                      </tr>
                      <tr>
                        <td align="center">
                        <form action="registrar.usuario.php" method="post">
                        <table  width="90%" border="0" cellpadding="2" cellspacing="4" class="tabla" >
                        <tr>
                          <td width="30%" align="left">Apellido Paterno (*):</td>
                          <td width="70%" align="left"><span id= 'camp1'>
                            <input name="capepatusu" type="text" id="capepatusu" size="30" maxlength="50" class="camposform" value="{$capepatest}" />
                            <span class='textfieldRequiredMsg'>Campo requerido.</span></span></td>
</tr>
                        <tr>
                          <td align="left">Apellido Materno (*):</td>
                          <td align="left"><span id= 'camp2'>
                            <input  name="capematusu" type="text" id="capematusu" size="30" maxlength="50" class="camposform" />
                            <span class='textfieldRequiredMsg'>Campo requerido.</span></span></td>
</tr>
                        <tr>
                          <td align="left">Nombres (*):</td>
                          <td align="left"><span id= 'camp3'>
                            <input name="cnomusu" type="text" id="cnomusu" size="40" maxlength="70" class="camposform" value="{$cnomest}" />
                            <span class='textfieldRequiredMsg'>Campo requerido.</span></span></td>
</tr>
                        <tr>
                          <td width="30%" align="left">Empresa (*):</td>
                          <td width="70%" align="left"><span id= 'camp4'>
                            <input name="cnomemp" type="text" id="cnomemp" size="30" maxlength="50" class="camposform" value="{$capepatest}" />
                            <span class='textfieldRequiredMsg'>Campo requerido.</span></span></td>
</tr>
                        <tr>
                          <td align="left">Email (*):</td>
                          <td align="left"><span id= 'camp5'>
                            <input  id="cmailusu" name="cmailusu" onKeyUp='this.value= this.value.toLowerCase(); validarEspacioBlancoUsuario();' type="text"  size="45" maxlength="60" class="camposform"/>
                            <span class='textfieldRequiredMsg'>Campo requerido.</span><span class="textfieldInvalidFormatMsg">&#8226; Formato incorrecto.</span></span></td>
</tr>
                        <tr>
                          <td align="left">Clave (* - En min&uacute;sculas):</td>
                          <td align="left"><span id= 'camp6'>
                            <input id= "cclavusu" name="cclavusu"  onKeyUp="this.value= this.value.toLowerCase(); validarEspacioBlancoContrasenia();"  type="password"  size="30" maxlength="30" class="camposform"/>
 <span class='textfieldRequiredMsg'>Campo requerido.</span></span></td>
</tr>
                        <tr>
                          <td colspan="2" align="left" class="home_subtitle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="left" class="home_subtitle">(*) Datos obligatorios a llenar.</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center"><input class="send" type="submit" name="Registrar" id="Registrar" value="Registrar" /></td>
                        </tr>
                      </table>
                        </form></td>
                      </tr>
                  </table></td>
                </tr>
              </table></td>
              <td width="30%" valign="top">
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                </tr>
              </table>
              </td>
            </tr>
          </table>
    </div></td>
  </tr>
</table>

<!-- FOOTER -->
        <table width="101%" border="0" cellpadding="0" cellspacing="0">
	      <tr>
	        <td>{include file = "../fpart/fpart.footer.tpl"}</td>
      </tr>
</table>
    <!-- END FOOTER -->
<script type="text/javascript">
var camp1 = new Spry.Widget.ValidationTextField('camp1');
var camp2 = new Spry.Widget.ValidationTextField('camp2');
var camp3 = new Spry.Widget.ValidationTextField('camp3');
var camp4 = new Spry.Widget.ValidationTextField('camp4');
var camp5 = new Spry.Widget.ValidationTextField('camp5','email');
var camp6 = new Spry.Widget.ValidationTextField('camp6');
</script>
</body></html>
