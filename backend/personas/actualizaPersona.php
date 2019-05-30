<?php 
		require_once('../conexion.php');
		$PK_numero= $_POST['PK_numero'];
		$lstInstituciones = $_POST['lstInstituciones'];
		$lstRoles= $_POST['lstRoles'];
		$lstTipoDoc= $_POST['lstTipoDoc'];
		$txtNro_doc= $_POST['txtNro_doc'];
		$txtNombres= $_POST['txtNombres'];
		$txtApellidos= $_POST['txtApellidos'];
		$rdbSexo= $_POST['rdbSexo'];
		$txtFecha_nacimiento= $_POST['txtFecha_nacimiento'];
		$txtFoto= $_POST['txtFoto'];

try{


echo $PK_numero; 

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();


$sql = "update tbl_personas set FK_id_rol = $lstRoles,TBL_instituciones_PK_numero= $lstInstituciones,tipo_doc = $lstTipoDoc,nro_doc='$txtNro_doc',nombres='$txtNombres',apellidos='$txtApellidos',sexo=$rdbSexo,fecha_nacimiento='$txtFecha_nacimiento',foto='$txtFoto' where PK_numero= $PK_numero";

$stmt = $llamarMetodo->prepare($sql);

$stmt->execute();

echo 'Registro actualizado correctamente...!';


} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";

}
 ?>
