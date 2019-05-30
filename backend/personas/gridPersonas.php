<?php 
require_once('../conexion.php');

class clsGridPersonas{
		public function getGrid($ini,$num)
			{
				try {
				$conn = new Conexion();
				$llamarMetodo = $conn->Conectar();
				$sql = "call spGetPersonasPaged($ini,$num)";
				$stmt = $llamarMetodo->prepare($sql);
				$stmt->execute();
				$result ='';
				$imgEdit = "../imgs/edit.jpg";
				$image24 = '<a href="#" id="pop" onclick="abrirModal(REEMPLAZARID)"> <img src="../imgs/edit.jpg" alt="Editar"  /> </a>';
				$image25 = '<a href="#" id="pop" onclick="abrirModalBorrado(REEMPLAZARID)" > <img src="../imgs/Eliminar.png" alt="Editar"  /> </a>';
				
				$result .= "<table class='table table-bordered  small'>";
				$result .= "<thead class=\"thead-default\" style=\"background-color: Gainsboro \">";
				$result .= "<tr class=\"h6 \">";
				$result .= "<td >Número</td><td>Tipo documento</td><td>Nro documento</td><td>Nombres</td><td>Apellidos</td><td>Sexo</td><td>Fecha nacimiento</td><td>Editar</td><td>Eliminar</td>";
				$result .= "</tr>";
				$result .= "</thead>";
				$result .= "<tbody>";
				while ($row=$stmt->fetch()) {
					$result .= "<tr class=\"h7 \">";
					$result .=  '<td >'.$row[0].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td>'.  str_replace("REEMPLAZARID",$row[0],$image24)  . '</td><td>'. str_replace("REEMPLAZARID",$row[0],$image25) . '</td>';
					$result .= "</tr>";
				}
				$result .= "</tbody>";
				$result .= "</table>";
				return $result;
				} catch (Exception $e) {
					echo 'error de conexion :<'.$e->getMessage();
				}
			}
			public function getTotalPersons(){
			try{
				$conn = new Conexion();
				$llamarMetodo = $conn->Conectar();
				$sql = "call spGetPersonasTotalCount()";
				$stmt = $llamarMetodo->prepare($sql);
				$stmt->execute();
				$total =0;
				while ($row=$stmt->fetch()) {
				$total = floor($row[0]);
				return $total;
				}
			}catch(Exception $e) {
				echo 'error de conexion :<'.$e->getMessage();
			}
			}

	}
 ?>
