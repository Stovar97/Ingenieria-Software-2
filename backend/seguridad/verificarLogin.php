<?php
session_start();
?>
<?php
require_once('../conexion.php');
$conn = new Conexion();
$llamarMetodo = $conn->Conectar();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "call spGetUsuariosByName('$username')";
$stmt = $llamarMetodo->prepare($sql);
echo $sql;
$stmt->execute();
while ($row=$stmt->fetch()) {

if ($password== $row[2]) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
	$_SESSION['idInstitucion'] = $row[5];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
	$_SESSION['nombreInstitucion'] = $row[6];
	$_SESSION['numeroRol'] = $row[7];
	$_SESSION['numeroPersona'] = $row[1];

	if ($row[4]==1) {
		header('Location:../instituciones/listarInstituciones.php ');
	}else if($row[4]==2){
		header('Location:../Carreras/listarCarreras.php');
	}else if($row[4]==3){
		if( $row[7]==1){
			header('Location:../../frontend/maestros/mnuMaestros.php');
		}else{
			header('Location:../../frontend/estudiantes/mnuAlumnos.php');
		}
	}
	} else { 
		   echo "Usuario o Password estan incorrectos.";
		   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
}
 ?>