<html>
<head>

		<title></title>
</head>
<body {$load} >
<form id='cform' name='cform' method='GET' action=''>
<div id='panel'>
<table width='100%' border='0' cellpadding='3' cellspacing='3'> 
<tr>
		<td colspan='2' id='titulo'>{$titcab} <img src='../../.res/_img/_opt/user_add.png' alt='' width='16' height='16' align='absmiddle'></tr>

<tr>
  <td width="14%" class="fontform">Perfil:</td>
  <td>{include file = '../fpart/fpart.perfil.tpl'}</td>
</tr>
<tr>
  <td class="fontform">Estado:</td>
  <td>
  {include file = '../fpart/fpart.estado.tpl'}
  </td>
</tr>
<tr>
		<td class="fontform"> Apellido Paterno:</td>
		<td>
		<span id= 'camp2'>
		<input title= 'capepatusu' type='text' name= 'capepatusu' id= 'capepatusu' size= '30' maxlength= '30' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
		</tr>
        
   <tr>
		<td class="fontform"> Apellido Materno:</td>
		<td>
		<span id= 'camp5'>
		<input title= 'capematusu' type='text' name= 'capematusu' id= 'capematusu' size= '30' maxlength= '30' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
		</tr>
        
<tr>
		<td class="fontform">Nombres:</td>
		<td width="86%">
		<span id= 'camp1'>
		<input title= 'cnomusu' type='text' name= 'cnomusu' id= 'cnomusu' size= '50' maxlength= '50' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
		</tr>
 		<tr>
 		  <td class="fontform">Email:</td>
 		  <td><span id= 'camp6'>
	      <input title= 'cmailusu' type='text' name= 'cmailusu' id= 'cmailusu' size= '40' maxlength= '60' /s>
	      <span class='textfieldRequiredMsg'>Campo requerido.</span>
	      <span class="textfieldInvalidFormatMsg">&#8226; Formato incorrecto.</span></span></td>
 		  </tr>       
	  <tr>
		<td class="fontform"> Clave:</td>
		<td>
		<span id= 'camp3'>
		<input title= 'cclavusu' type='password' name= 'cclavusu' id= 'cclavusu' size= '30' maxlength= '30' /s>
		<span class='textfieldRequiredMsg'>Campo requerido.</span></span>
		</td>
		</tr>
<tr>
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
var camp5 = new Spry.Widget.ValidationTextField('camp5');
var camp6 = new Spry.Widget.ValidationTextField('camp6','email');
</script> 
</html>