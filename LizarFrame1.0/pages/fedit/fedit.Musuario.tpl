<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title></title>
</head>
<body onLoad= {$load}>
<form id='cform' name='cform' method='GET' action=''>
<div id='panel'>
<table width='100%' border='0' cellpadding='3' cellspacing='3'> 
<tr>
		<td colspan='2' id='titulo'>{$titcab} <img src='../../.res/_img/_opt/user_edit.png' alt='' width='16' height='16' align='absmiddle'>
	      <label>
	        <input type="hidden" name="codusu" id="codusu" value="{$codusu}">
          </label>
	  </tr>
<tr>
		<td class="fontForm"> Apellido Paterno:</td>
		<td>
		<span id= 'camp2'>
		<input title= 'capepatusu' type='text' name= 'capepatusu' id= 'capepatusu'  value="{$USUARIO[0].apepatusu}" size= '50' maxlength= '50' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
		</tr>
        
<tr>
		<td class="fontForm"> Apellido Materno:</td>
		<td>
		<span id= 'camp5'>
		<input title= 'capematusu' type='text' name= 'capematusu' id= 'capematusu'  value="{$USUARIO[0].apematusu}" size= '50' maxlength= '50' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
		</tr>
<tr>
		<td  class="fontForm" width="11%">Nombres:</td>
		<td width="89%">
		<span id= 'camp1'>
		<input title= 'cnomusu' type='text' name= 'cnomusu' id= 'cnomusu'  value="{$USUARIO[0].nomusu}" size= '50' maxlength= '50' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
		</tr>
        
        
		<td class="fontForm"> Email:</td>
		<td>
		<span id= 'camp4'>
		<input title= 'cmailusu' type='text' name= 'cmailusu' id= 'cmailusu'  value="{$USUARIO[0].mailusu}" size= '50' maxlength= '50' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
		</tr>
      <tr>
		<td colspan='2'><input name='Guardar' type='submit' class='inputbot' id='Submit' value='Guardar'/> <a href="../flist/flist.Musuario.php"> | [Regresar] <img src="../../.res/_img/_opt/application_form.png" alt="Regresar" width="16" height="16" border="0" align="absmiddle"></a></td>
		</tr> 
</table>
</div>
</form>
</body>
<script type='text/javascript'>
var camp1 = new Spry.Widget.ValidationTextField('camp1');
var camp2 = new Spry.Widget.ValidationTextField('camp2');
var camp4 = new Spry.Widget.ValidationTextField('camp4');
var camp5 = new Spry.Widget.ValidationTextField('camp5');
</script> 
</html>