<?php
        require_once('../conexion.php');
			$id = 0;
			if(!empty($_GET['id'])){
				$id=$_GET['id'];
				$conn = new Conexion();
				$llamarMetodo = $conn->Conectar();
				$sql = "call spGetRolesById($id)";
				$stmt = $llamarMetodo->prepare($sql);
				$stmt->execute();
                while ($row=$stmt->fetch()) {
					$PK_id = $row[0];
                    $nombre = $row[1];
                    $descripcion = $row[2];
				}
			}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<script src="../../bootstrap/Jquery/jquery-3.1.1.slim.min.js"></script>
<script src="../../bootstrap/Jquery/tether.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>

<form method="post" action="actualizaRol.php">

		<input   type="hidden" id="PK_numero" name="PK_numero" value="<?php echo $id; ?>">		
		
		<table width="90%" class="">
		<tr>
		<td>
		
		<div class="form-group row">
				<label for="txtNombres" class="col-2 col-form-label">Nombres</label>
				<div class="col-10">
					<input class="form-control h8 "  type="text" id="txtNombres" name="txtNombres"  value="<?php echo $nombre; ?>">
				</div>
		</div>	
		<div class="form-group row">
				<label for="txtDescripcion" class="col-2 col-form-label">Apellidos</label>
				<div class="col-10">
					<input class="form-control h8 "  type="text" id="txtDescripcion"  name="txtDescripcion"  value="<?php echo $descripcion; ?>">
				</div>
		</div>
		
<input class="btn btn-default"  type="submit" name='btnIngresar' value='Ingresar'>

</td>
</tr>
</table>
</form>
</body>

</html>
