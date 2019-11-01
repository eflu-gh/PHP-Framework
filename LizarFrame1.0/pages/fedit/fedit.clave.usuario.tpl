<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title></title>
</head>
<body {$load}>
<form id='cform' name='cform' method='GET' action=''>
<div id='panel'>
<table width='100%' border='0' cellpadding='3' cellspacing='3'> 
<tr>
		<td colspan='2' id='titulo'>{$titcab} <img src='../../.res/_img/_opt/lock_edit.png' alt='' width='16' height='16' align='absmiddle'>
	        <input type="hidden" name="codusu" id="codusu" value="{$codusu}"></tr>
<tr>
		<td class="fontform" width="15%">Usuario:</td>
		<td width="85%">
		{$USUARIO[0].nomusu} {$USUARIO[0].apepatusu} {$USUARIO[0].apematusu}
		</td>
		</tr>
      <tr>
		<td class="fontform"> Clave Antigua:</td>
		<td>
		<span id= 'camp1'>
		<input title= 'cclavusu' type='password' name= 'cclavusu' id= 'cclavusu' size= '30' maxlength= '30' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
	  </tr>
      
       <tr>
		<td class="fontform"> Clave Nueva:</td>
		<td>
		<span id= 'camp2'>
		<input title= 'cclavusu' type='password' name= 'clavnew1' id= 'clavnew1' size= '30' maxlength= '30' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
	  </tr>
       <tr>
         <td class="fontform">Repetir Nueva Clave</td>
         <td><span id= 'camp3'>
		<input title= 'cclavusu' type='password' name= 'clavnew2' id= 'clavnew2' size= '30' maxlength= '30' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span></td>
       </tr>
      <tr>
		<td colspan='2'><input name='Guardar' type='submit' class='inputbot' id='Submit' value='Guardar'/></td>
		</tr> 
</table>
</div>
</form>
</body>
<script type='text/javascript'>
var camp1 = new Spry.Widget.ValidationTextField('camp1');
var camp2 = new Spry.Widget.ValidationTextField('camp2');
var camp3 = new Spry.Widget.ValidationTextField('camp3');
</script> 
</html>