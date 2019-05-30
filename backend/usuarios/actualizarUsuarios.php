<?php
        require_once('../conexion.php');
			$id = 0;
			if(!empty($_GET['id'])){
				$id=$_GET['id'];
				$conn = new Conexion();
				$llamarMetodo = $conn->Conectar();
				$sql = "call spGetUsuariosById('$id')";
				
				$stmt = $llamarMetodo->prepare($sql);
				$stmt->execute();
                while ($row=$stmt->fetch()) {
					$PK_nombre = $row[0];
                   
                    $password = $row[2];
					$activo = $row[3];
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

<form method="post" action="actualizaUsuario.php">

		<input   type="hidden" id="PK_numero" name="PK_numero" value="<?php echo $id; ?>">		
		
		<table width="90%" class="">
		<tr>
		<td>
		<div class="form-group row">
						<label for="lstTipoUsuario" class="col-2 col-form-label">Tipo documento</label>
						<div class="col-10">
							<select class="form-control"  name="lstTipoUsuario" >
							<option value="">Seleccione</option>
							<option  value="1">Administrador general</option>
							<option value="2">Administrador Instituciones</option>
							<option value="3">Usuario</option>
							</select>
						</div>
		</div>
		<div class="form-group row">
				<label for="txtPassword" class="col-2 col-form-label">Contraseña</label>
				<div class="col-10">
					<input class="form-control h8 "  type="text" id="txtPassword"  name="txtPassword"  value="<?php echo $password; ?>">
				</div>
		</div>
		
<input class="btn btn-default"  type="submit" name='btnIngresar' value='Actualizar'>

</td>
</tr>
</table>
</form>
</body>

</html>
