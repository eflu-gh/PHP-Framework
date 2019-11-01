<?php /* Smarty version 2.6.20, created on 2015-11-30 11:48:05
         compiled from login.tpl */ ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $this->_tpl_vars['aplicacion']; ?>
</title>
</head>
<body onLoad="<?php echo $this->_tpl_vars['load']; ?>
" scroll="no">
  <div id="main">
    <div id="header">
      <div id="logo"></div>
        <div id="menubar">
        <ul id="menu">
        <li class="current"><a href="login.php">Login</a></li>
        <li><a href="registrar.usuario.php">Registrarse</a></li>
        </ul>
        </div>
</div>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
        <td><div id="site_content">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="70%" align="center" valign="middle"><table width="100%" height="154" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td width="37%" align="center" valign="middle"><img src="../fimagenes/logo.png" width="491" height="367"></td>
</tr>
              </table></td>
              <td width="30%" valign="top">
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top">
              </td>
                </tr><br>
                <tr>
                  <td valign="top"><div id="sidebar_container"> <img class="paperclip" src="../../.css/img_login/paperclip.png" alt="paperclip">
                  <div class="sidebar">
                    <!-- insert your sidebar items here -->
                    <h3><?php echo $this->_tpl_vars['aplicacion']; ?>
</h3>
                    <h4>Por favor ingrese sus credenciales.</h4>
                    <br>
                   <form  method="post" id="cform" name="cform" action="login.php">
                    <table width="200" border="0" cellpadding="5" cellspacing="5">
                      <tr>
                        <td>
                          Email: 
                       </td>
                        <td><span id="sprytextfield1">
                <input type="text" name="cmailusu" id="cmailusu">
                <span class="textfieldRequiredMsg">Campo requerido.</span></span></td>
                      </tr>
                      <tr>
                        <td>Clave:</td>
                        <td><span id="sprytextfield2">
                <input type="password" name="cclavusu" id="cclavusu">
                <span class="textfieldRequiredMsg">Campo requerido.</span></span></td>
                      </tr>
                     
                      <tr>
                        <td colspan="2" align="center">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><input  name="button" type="submit" class="send" id="button" value="Ingresar">
                <input name="button2" type="reset" class="send" id="button2" value="Limpiar"></td>
                      </tr>
                       <tr>
                        <td colspan="2"><?php if ($this->_tpl_vars['mensaje']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../.part/_error_op.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
                      </tr>
                    </table>
                    </form>
                  </div>
              </div></td>
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
	        <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../fpart/fpart.footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
      </tr>
</table>
    <!-- END FOOTER -->
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>