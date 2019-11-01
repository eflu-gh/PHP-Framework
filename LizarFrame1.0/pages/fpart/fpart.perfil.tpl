<select name="ifkcodperf" id="ifkcodperf">
{foreach from = $LISTPERF item = fila} 
{if $fila.codperf == $codperf }
<option value="{$fila.codperf}" selected>{$fila.nomperf}</option>
{else}
<option value="{$fila.codperf}">{$fila.nomperf}</option>
{/if}
{/foreach}
</select>