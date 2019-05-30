<?php
class clsIframeForm{
		public function getIFRAME($URL,$TAMANIO)
			{
				try {
						$result ='';
						$result .= "<div id=\"myModal\" class=\"modal fade bd-example-modal-lg\" role=\"dialog\">";
						$result .= "	<div class=\"modal-dialog modal-lg\">";
						$result .= "<!-- Modal content-->";
						$result .= "		<div class=\"modal-content\">";
						$result .= "			<div class=\"modal-header\">";
						$result .= "				<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
						$result .= "				<h4 class=\"modal-title\">" ;
						$result .=  "					REPLACETITULO" ;
						$result .=  "				</h4>";
						$result .=	"			</div>";
						$result .= "			<div class=\"modal-body\">";
						$result .= "				<div class=\"modal-body\">";
						$result .= "					<iframe id=\"myIframe\" width=\"100%\" height=\"REPLACETAMANIO\" src=\"URLREPLACE\" style=\"zoom:0.60\" height=\"250\" frameborder=\"0\"></iframe>";
						$result .= "				</div>";
						$result .= "			</div>";
						$result .= "			<div class=\"modal-footer\">";
						$result .= "				<button type=\"button\" width=\"50px\"  class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>";
						$result .= "			</div>";
						$result .= "		</div>";

						$result .= "	</div>";
						$result .= "</div>";
				    return str_replace("REPLACETAMANIO",$TAMANIO,str_replace("URLREPLACE",$URL,$result)); 
                    }
                    catch (Exception $e) {
					   
				    }
            }
}
 ?>

