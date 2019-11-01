<?php include_once (CF_MODELO)?>
<?php
class Mestado{
	
	function listarEstado(){
		$mod = new Modelo ();
		$mod -> nomproc = "pa_listarEstado";
		$recset = $mod -> ejecutarProcedimiento ();
		$rowset = $mod -> fetch ($recset);
		if($rowset){
			$cont = 0;
			do{
			$est[$cont] =  array  (
			'codest'	=> $rowset['ipkcodest'],
			'descest'   => $rowset['cdescest']
			);
			$cont++;
			$rowset = $mod -> fetch ($recset);
			}while($rowset);
		}
		unset($mod);
		
		return $est;
	}
}
?>