<?php 
require_once('../conexion.php');
$nombre = $_POST['txtNombres'];
$descripcion= $_POST['txtDescripcion'];
try
{
		echo $nombre;
		echo $descripcion;
		$conn = new Conexion();
		$llamarMetodo = $conn->Conectar();
		$sql = "insert into tbl_roles values(null,'$nombre','$descripcion')";
		$stmt = $llamarMetodo->prepare($sql);
		$stmt->execute();
		echo '<BR> <BR> <BR> <BR> <BR> Registro Ingresado correctamente...!';
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";

}
 ?>