<?php 
require_once('../conexion.php');
$txtNombres = $_POST['txtNombres'];
$txtPassword= $_POST['txtPassword'];
$txtNroPersona= $_POST['txtNroPersona'];
$lstTipoUsuario= $_POST['lstTipoUsuario'];

$Activo = 1;
try
{

		$conn = new Conexion();
		$llamarMetodo = $conn->Conectar();
		$sql2 = "call spUsuariosGetByIdpersona($txtNroPersona)";
		$stmt = $llamarMetodo->prepare($sql2);
		$stmt->execute();
		$Respuesta = "";
		while ($row=$stmt->fetch()) {
			$NombreUsuario = $row[0];
		}
		if(empty($NombreUsuario)){
			$sql = "insert into tbl_usuarios values('$txtNombres',$txtNroPersona,'$txtPassword',$Activo,$lstTipoUsuario)";
			echo $lstTipoUsuario;
			$stmt = $llamarMetodo->prepare($sql);
			$stmt->execute();
			$Respuesta = "Usuario creado exitosamente";
		}else{
			$Respuesta = "la persona ya tiene creado un usuario";

		}


	
		echo '<BR> <BR> <BR> <BR> <BR> '. $Respuesta;
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";

}
 ?>