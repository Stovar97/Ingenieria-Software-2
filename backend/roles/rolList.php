<?php 
require_once('../conexion.php');

class clsRol{
		public function getList($idRol)
			{
				try {

				$conn = new Conexion();
				$llamarMetodo = $conn->Conectar();

				$sql = "SELECT * FROM tbl_roles";
				$stmt = $llamarMetodo->prepare($sql);
				$stmt->execute();
				$result ='';

				while ($row=$stmt->fetch()) {
				if($idRol == $row[0]){
					$result .=  '<option value="' .$row[0].'" selected="selected">'.$row[1].'</option>';
					}else{
					$result .=  '<option value="' .$row[0].'">'.$row[1].'</option>';
					}
				}
				
				return $result;
				} catch (Exception $e) {
					echo 'error de conexion :<'.$e->getMessage();
				}
			}
	}
 ?>
