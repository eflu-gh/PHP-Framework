<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
			<title></title>
</head>
<body>
{$preload}
<div id='panel'>
<table width='100%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#CCCCCC'>
<tr>
 <td colspan='12' id='titulo'>{$titcab} <img src='../../.res/_img/_opt/application_view_list.png' alt='' width='16' height='16' align='absmiddle'></td>
</tr>
 <tr bgcolor='#D8DDFC'>
      <th width='5%'>C&oacute;digo</th>
	  <th width='15%'>Apellido Paterno</th>
      <th width='15%'>Apellido Materno</th>
      <th width='20%'>Nombres</th>
      <th width='15%'>Perfil</th>
      <th width='15%'>Email</th>
      <th width='15%'>Estado</th>
      <th width='5%'>...</th>
 </tr>
 {section name = rshow loop = $USUARIO}
  <tr onMouseOver="this.style.background='#E1E1E1';" onMouseOut="this.style.background=''">
    <td align='right'>{$USUARIO[rshow].nrousu}</td>
    <td align='left'>{$USUARIO[rshow].apepatusu}</td>
    <td align='left'>{$USUARIO[rshow].apematusu}</td>
    <td align='left'>{$USUARIO[rshow].nomusu}</td>
    <td align='left'>{$USUARIO[rshow].nomperf}</td>
    <td align='left'>{$USUARIO[rshow].mailusu}</td>
     <td align='left'>{$USUARIO[rshow].descest}</td>
    <td align='center'> <a href="../fedit/fedit.Musuario.php?codusu={$USUARIO[rshow].codusu}"><img src="../../.res/_img/_opt/application_form_edit.png" alt="Edici&oacute;n" border="0" style="cursor:pointer" width="16" height="16"  id="tool"align="absmiddle" ></a>
    </td>
  </tr>
 {/section}
       <tr>
        <td height="20" colspan="12" valign="middle">{include file = '../fpart/fpart.totalizador.tpl'}</td>
      </tr>
</table>
</div>
{$splash}
</body>
</html>