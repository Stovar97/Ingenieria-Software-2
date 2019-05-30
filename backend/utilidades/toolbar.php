<?php 
class toolbar{
		public function traerToolbar()
		{
				try {
					$result ='';
					$result .= "<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">";
					$result .= "  <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">";
					$result .= "   <button type=\"button\" class=\"btn btn-secondary\" onclick=\"abrirModal(0)\">Nuevo</button>";
					$result .= " </div>";
					$result .= "  <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">";
					$result .= "    <button type=\"button\" class=\"btn btn-secondary\">Exportar</button>";
					$result .= "  </div>";
					$result .= "</div>";
					return $result;
				}catch(Exception $E){

				}
		}
}
 ?>