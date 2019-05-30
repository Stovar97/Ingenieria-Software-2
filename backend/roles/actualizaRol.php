<?php 
require_once('../conexion.php');
$PK_numero= $_POST['PK_numero'];
$txtNombres = $_POST['txtNombres'];
$txtDescripcion= $_POST['txtDescripcion'];

try{


echo $PK_numero; 

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();


$sql = "update tbl_roles set nombre = '$txtNombres',descripcion= '$txtDescripcion' where PK_id= $PK_numero";

$stmt = $llamarMetodo->prepare($sql);

$stmt->execute();

echo 'Registro actualizado correctamente...!';


} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";

}
 ?>
