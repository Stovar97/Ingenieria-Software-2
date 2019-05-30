<?php
        require_once('../conexion.php');
			$id = 0;
			if(!empty($_GET['id'])){
				$id=$_GET['id'];
				$conn = new Conexion();
				$llamarMetodo = $conn->Conectar();
				$sql = "call spGetPersonasById($id)";
				$stmt = $llamarMetodo->prepare($sql);
				$stmt->execute();
                while ($row=$stmt->fetch()) {
					$numero = $row[0];
                    $idRol = $row[1];
                    $intitucion = $row[2];
                    $tipoDoc = $row[3];
                    $nroDoc = $row[4];
                    $nombres = $row[5];
                    $apellidos = $row[6];
                    $sexo = $row[7];
                    $fechaNacimiento = $row[8];
                    $foto = $row[9];
				}
			}
?>
<?php
require_once('../roles/rolList.php');
	$roles = new clsRol();
	if(!empty($idRol)) { 
	$listRoles = $roles->getList($idRol);
	} 
	
?>
<?php
			require_once('../instituciones/institucionesList.php');
				$instituciones = new clsInstituciones();
				if(!empty($intitucion)) { 
				$listinstituciones = $instituciones->getList($intitucion);
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

<form method="post" action="actualizaPersona.php">

		<input   type="hidden" id="PK_numero" name="PK_numero" value="<?php echo $id; ?>">		
		
		<table width="90%" class="">
		<tr>
		<td>
		
		<div class="form-group row">
			<label for="lstInstituciones" class="col-2 col-form-label">Instituciòn</label>
			<div class="col-10">
			    <select class="form-control h8  small" name="lstInstituciones" >
			    <option value="">Seleccione</option>
					    <?php
					    echo $listinstituciones;
					    ?>
			    </select>
			</div>		
		</div>
		<div class="form-group row">
			<label for="lstRoles" class="col-2 col-form-label">Tipo persona</label>
			<div class="col-10">
			<select class="form-control h8 "  name="lstRoles">
			<option value="">Seleccione</option>
					<?php
					echo $listRoles;
					?>
			</select>
			</div>
        </div>
		<div class="form-group row">
			<label for="lstTipoDoc" class="col-2 col-form-label">Tipo documento</label>
			<div class="col-10">
				<select class="form-control h8 "  name="lstTipoDoc" >
				<option value="">Seleccione</option>
				<option  value="1" <?php echo ($tipoDoc ==  '1') ? ' selected="selected"' : '';?> >Cèdula ciudadanìa</option>
				<option value="2" <?php echo ($tipoDoc ==  '2') ? ' selected="selected"' : '';?> >Tarjeta Identidad</option>
				<option value="3" <?php echo ($tipoDoc ==  '3') ? ' selected="selected"' : '';?> >Cèdula extranjerìa</option>
				<option value="4" <?php echo ($tipoDoc ==  '4') ? ' selected="selected"' : '';?> >otro</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
				<label for="txtNro_doc" class="col-2 col-form-label">Nùmero</label>
				<div class="col-10">
					<input class="form-control h8 "  type="number" id="txtNro_doc" name="txtNro_doc" value="<?php echo $nroDoc; ?>">
				</div>
		</div>
		<div class="form-group row">
				<label for="txtNombres" class="col-2 col-form-label">Nombres</label>
				<div class="col-10">
					<input class="form-control h8 "  type="text" id="txtNombres" name="txtNombres"  value="<?php echo $nombres; ?>">
				</div>
		</div>	
		<div class="form-group row">
				<label for="txtApellidos" class="col-2 col-form-label">Apellidos</label>
				<div class="col-10">
					<input class="form-control h8 "  type="text" id="txtApellidos"  name="txtApellidos"  value="<?php echo $apellidos; ?>">
				</div>
		</div>
		<div class="form-group row">
				<label for="rdb1" class="col-2 form-check-label h8 ">
					<input type="radio" id="rdb1" name="rdbSexo" value="1" <?php echo ($sexo ==  '1') ? ' checked' : '';?>> Masculino<br>
				</label>
					<label for="rdb2"  class="form-check-label h8 ">
					<input type="radio" id="rdb2"  name="rdbSexo" value="2" <?php echo ($sexo ==  '2') ? ' checked' : '';?>> Femenino<br>
					</label>
					<label for="rdb3"   class="form-check-label h8 ">
					<input type="radio" id="rdb3"  name="rdbSexo" value="3" <?php echo ($sexo ==  '3') ? ' checked' : '';?>> Otro
					</label>
				
		</div>	
		<div class="form-group row">
				<label for="txtFecha_nacimiento" class="col-2 form-check-label">Fecha de nacimiento</label>
				<div class="col-10">
					<input class="form-control h8 "  type="Date" id="txtFecha_nacimiento"  name="txtFecha_nacimiento"  
					value="<?php echo date('Y-m-d',strtotime($fechaNacimiento)); ?>" >
				</div>
		</div>
		<div class="form-group">
				<label for="txtFoto"  class="col-2 form-check-label" >Foto</label>
				<input class="form-control h8 "  type="text" id="txtFoto" name="txtFoto">
		</div>
<input class="btn btn-default"  type="submit" name='btnIngresar' value='Ingresar'>

</td>
</tr>
</table>
</form>
</body>

</html>
