<?php 
require_once('../conexion.php');

class clsPaginacion{
	public function paginar($total,$tamanio,$ListarPersonas){
	try{
	$NroPaginas = floor($total/$tamanio);
		$i = 0;
		$result = "<nav aria-label=\"Page navigation example\">";
		$result .= "<ul  class=\"pagination\">";
		while ($i <= $NroPaginas) {
				$result .=  "<li class=\"page-item\">";
				$result .=  "<a  class='page-link  h6 ' href='" . $ListarPersonas . ".php?pagina=".$i."'>";
				$result .=  $i +1;
				$result .=  "</a>";
				$result .=  "</li>";
				$i++;
			}
		$result .= "</ul>";
		$result .= "</nav>";
		return $result ;
	}catch(Exception $Ex){
	
	}
}
}
 ?>
