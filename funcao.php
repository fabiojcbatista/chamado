<?PHP
function cData($data){
	
	$ano = substr($data,0,4);
	$mes = substr($data,5,2);
	$dia = substr($data,8,2);
	
	$horario = substr($data,11,8);
	
	//2020-03-30 15:59:52
	
	 $data = $dia."/".$mes."/".$ano." ".$horario;
	return $data;
}


?>