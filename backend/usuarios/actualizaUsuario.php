<?php 
require_once('../conexion.php');
$PK_numero= $_POST['PK_numero'];
$txtPassword = $_POST['txtPassword'];

$lstTipoUsuario = $_POST['lstTipoUsuario'];


try{


echo $PK_numero; 

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();


$sql = "update tbl_usuarios set password = '$txtPassword' , tipoUsuario=$lstTipoUsuario where PK_nombre= '$PK_numero'";
//echo $sql;
$stmt = $llamarMetodo->prepare($sql);

$stmt->execute();

echo 'Registro actualizado correctamente...!';


} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";

}
 ?>