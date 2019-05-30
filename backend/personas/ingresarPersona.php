<?php 
require_once('../conexion.php');

$lstInstituciones = $_POST['lstInstituciones'];
$lstRoles= $_POST['lstRoles'];
$lstTipoDoc= $_POST['lstTipoDoc'];
$txtNro_doc= $_POST['txtNro_doc'];
$txtNombres= $_POST['txtNombres'];
$txtApellidos= $_POST['txtApellidos'];
$rdbSexo= $_POST['rdbSexo'];
$txtFecha_nacimiento= $_POST['txtFecha_nacimiento'];

try{

echo $lstInstituciones;
echo $lstRoles;
echo $lstTipoDoc;
echo $txtNro_doc;
echo $txtNombres;
echo $txtApellidos;
echo $rdbSexo;
echo $txtFecha_nacimiento;

			$imagen== $_FILES['imagen']['name']; 

            $ruta = "imagenes/" . $_FILES['imagen']['name']; 
            $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta); 
   
   


$conn = new Conexion();
$llamarMetodo = $conn->Conectar();


$sql = "insert into tbl_personas values(null,$lstRoles,$lstInstituciones,$lstTipoDoc,'$txtNro_doc','$txtNombres','$txtApellidos',$rdbSexo,'$txtFecha_nacimiento','$ruta')";

$stmt = $llamarMetodo->prepare($sql);
echo '<BR> <BR> <BR> <BR> <BR> Registro Ingresado correctamente...!';
$stmt->execute();
		
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";

}
 ?>
