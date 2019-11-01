<?php include_once (CF_MODELO);?>
<?php  
class Mperfil{

/*Función lista a los perfiles.*/
	function listarPerfiles (){
		$mod = new Modelo ();
		$mod -> nomproc = "pa_listarPerfiles";
		$recset = $mod -> ejecutarProcedimiento ();
		$rowset = $mod -> fetch ($recset);
		if($rowset){
			$cont = 0;
			do { 
				$form[$cont] =  array  (
				'codperf'	=> $rowset['ipkcodperf'],
				'nomperf'   => $rowset['cnomperf']
				);	
			$cont++;
			$rowset = $mod -> fetch ($recset);
			} while($rowset);
		}
		unset($mod);
		return $form;   
	}
}
?>