<!DOCTYPE HTML>
<html>
<head>
<title>{$nombreAplicacion}</title>
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
                    <h1>Validaci&oacute;n de usuario </h1>
                    <h2>
                    {$mensaje}.
                  </div></td>
                      </tr>
                  </table></td>
                </tr>
              </table></td>
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
</body></html>
