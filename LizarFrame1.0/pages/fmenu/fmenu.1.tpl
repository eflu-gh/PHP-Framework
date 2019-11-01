<html>
<head>
<title></title>
<script type="text/javascript" src="../../.js/_arbol/_arbol.js"></script>
<script type="text/javascript" src="../../.lib/_ext/bootstrap.js"></script>

</head>
<form name="cform">
</td>
<p>&nbsp;</p>
<table width="200" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
<td width="146px" height="100%" valign="top">
<div class="dtree" style="width:100%;">
	<script type="text/javascript">
	d = new dTree('d');
	{section name = rshow loop = $MENU}
	d.add(   
	{$MENU[rshow].codmenu}, {$MENU[rshow].codpadr}, '{$MENU[rshow].nomopc}', '{$MENU[rshow].nomenla}', '{$MENU[rshow].nomopc}', 'frameprincipal', '{$MENU[rshow].icomenu}');
	{/section}
	document.write(d);
	</script>
</div>
	<script type="text/javascript">
    
    function loadMenu(url,name,id)
    {ldelim}
   		var tabs1 = parent.parent.frames['bodyframe'].frames['frameprincipal'];
    	tabs1.mostrarTab(url,name,id);
    {rdelim}
    </script>
</td>
</tr>
</table>
</form>
</body>
</html>