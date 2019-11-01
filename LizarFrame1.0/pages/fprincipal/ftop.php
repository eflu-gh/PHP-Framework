<?php  session_start();?>
<link href="../../.css/_estilo.1.css" rel="stylesheet" type="text/css">
<body onLoad="mueveReloj(); datetime();">
<script language="javascript" type="text/javascript" src="../../.js/_desabilitarClicDerecho.js"></script>
<script language="javascript" type="text/javascript" src="../../.js/_cabecera.js"></script>
<form name="form_reloj">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td width="20" height="20" align="left" valign="top"><img src="../../.Res/_img/_estructura/lefttop.png" width="20" height="20" /></td>
			<td width="20" height="20" align="left" valign="top"><img src="../../.Res/_img/_estructura/lefttopcenter.png" width="20" height="20" /></td>
			<td width="2000">&nbsp;</td>
			<td width="20" height="20" align="right" valign="top"><img src="../../.res/_img/_estructura/righttopcenter.png" width="20" height="20" /></td>
			<td width="20" height="20" align="right" valign="top"><img src="../../.res/_img/_estructura/righttop.png" width="20" height="20" /></td>
		</tr>
		<tr>
			<td height="20" align="left" valign="top"><img src="../../.res/_img/_estructura/lefttopbottom.png" alt="" width="20" height="20" /></td>
			<td colspan="3" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="user">
              <tr>
                <td width="30%" rowspan="3"><p><img src="../fimagenes/logo2.png" width="85" height="53"></p></td>
                <td width="75%" rowspan="3" align="center"><table width="120%" border="0" align="right" cellpadding="1" cellspacing="1">
                  <tr>
                    <td width="43%" align="left" valign="middle"><A href="#" onClick="javascript: imprimir();" onMouseOver="cambiar('print','print_on')" onMouseOut="cambiar('print','print_off')" onMouseDown="cambiar('print','print_push')" onMouseUp="cambiar('print','print_on')"><img src="../../.res/_img/_estructura/print_off.jpg" alt="Imprimir" name="print" width="24" height="24" hspace="1" border="0" align="absmiddle"></A><A href="#" onClick="javascript: refrescar();" onMouseOver="cambiar('refresh','refresh_on')" onMouseOut="cambiar('refresh','refresh_off')" onMouseDown="cambiar('refresh','refresh_push')" onMouseUp="cambiar('refresh','refresh_on')"> <img src="../../.res/_img/_estructura/refresh_off.jpg" alt="Actualizar" name="refresh" width="24" height="24" hspace="1" border="0" align="absmiddle"></A><A href="#" onClick="javascript: infos();" onMouseOver="cambiar('info','info_on')" onMouseOut="cambiar('info','info_off')" onMouseDown="cambiar('info','info_push')" onMouseUp="cambiar('info','info_on')"><img src="../../.res/_img/_estructura/info_off.jpg" alt="Informaci&oacute;n" name="info" width="24" height="24" hspace="1" border="0" align="absmiddle"></A> <A href="fclose.php"
                    
                      onMouseOver="cambiar('cerrar','cerrar_on')" onMouseOut="cambiar('cerrar','cerrar_off')" onMouseDown="cambiar('cerrar','cerrar_push')" onMouseUp="cambiar('cerrar','cerrar_on')"><img src="../../.res/_img/_estructura/cerrar_off.jpg" alt="Cerrar" name="cerrar" width="24" height="24" hspace="1" border="0" align="absmiddle"></A></td>
                  </tr>
                </table></td>
                <td width="52" height="15" align="left" valign="top"><strong>Usuario:&nbsp;</strong></td>
                <td width="147" valign="top"><?php echo $_SESSION['NOMBRE']?></td>
              </tr>
              <tr>
                <td height="15" align="left" valign="top" class="cont"><strong>Fecha:</strong></td>
                <td valign="top" class="cont"><input name="timedate" style="border:0; cursor:0" readonly type="text" size="12" maxlength="12"> </td>
              </tr>
              <tr>
                <td height="17" align="left" valign="top" class="cont"><strong>Hora:</strong></td>
                <td valign="top" class="cont"><input name="reloj" type="text" style="border:0; cursor:0" readonly size="13" maxlength="13"></td>
              </tr> 
              
            </table></td>
		  <td height="20" align="right" valign="top"><img src="../../.res/_img/_estructura/righttopbottom.png" alt="" width="20" height="20" /></td>
		</tr>
	</table>
<script language="JavaScript" src="../../.js/_tools/_clock.js"></script>
<script language="JavaScript" src="../../.js/_tools/_date.js"></script>
</form>
</body>
</html>