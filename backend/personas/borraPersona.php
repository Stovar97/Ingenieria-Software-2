<?php 
require_once('../conexion.php');
$PK_numero= $_POST['PK_numero'];
try{
$conn = new Conexion();
$llamarMetodo = $conn->Conectar();


$sql = "delete from tbl_personas  where PK_numero= $PK_numero";

$stmt = $llamarMetodo->prepare($sql);

$stmt->execute();

echo 'Registro Borrado';
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";

}
 ?>