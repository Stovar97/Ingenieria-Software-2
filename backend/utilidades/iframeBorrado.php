<?php
class clsIframeBorrado{
		 public function getIFRAME($URL)
			{
				try {
					 $result ='';
                    $result .= "<div id=\"myModalBorrado\" class=\"modal fade bd-example-modal-lg\" role=\"dialog\">";
					$result .= "<div class=\"modal-dialog\">";
					$result .= "<!-- Modal content-->";
					$result .= "<div class=\"modal-content\">";
					$result .= "<div class=\"modal-header\">";
					$result .= "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
					$result .= "<h4 class=\"modal-title\">" ;
					$result .=  "Borrar registros" ;
					$result .=  "</h4>";
					$result .= "</div>";
					$result .= "<div class=\"modal-body\">";
                       $result .= "<div class=\"modal-body\">";
						$result .= "<iframe id=\"myIframeBorrado\" width=\"100%\" height=\"100px\" src=\"URLREPLACE\" style=\"zoom:0.60\" height=\"250\" frameborder=\"0\"></iframe>";
						$result .= "</div>";
					$result .= " </div>";
					$result .= "<div class=\"modal-footer\">";
					$result .= "<button type=\"button\" width=\"50px\" height=\"200px\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>";
					$result .= "</div>";
					$result .= "</div>";

					$result .= "</div>";
					$result .= "</div>";
				
					return str_replace("URLREPLACE",$URL,$result); 
                    }
                    catch (Exception $e) {
					   
				    }
            }
}
 ?>