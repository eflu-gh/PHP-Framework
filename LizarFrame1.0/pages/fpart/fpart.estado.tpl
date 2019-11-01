<select name="ifkcodest" id="ifkcodest"  >
{foreach from = $LISTEST item = fila} 
{if $fila.codest == $codest }
<option value="{$fila.codest}" selected>{$fila.descest}</option>
{else}
<option value="{$fila.codest}">{$fila.descest}</option>
{/if}
{/foreach}
</select>