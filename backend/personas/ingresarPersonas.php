<?php
require_once('../roles/rolList.php');
$roles = new clsRol();
$listRoles = $roles->getList('');
?>

<?php
require_once('../instituciones/institucionesList.php');
$instituciones = new clsInstituciones();
$listinstituciones = $instituciones->getList('');
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

<form method="post" action="ingresarPersona.php"  enctype="multipart/form-data">
		<table width="90%">
		<tr>
		<td>
		<div class="form-group row">
			<label for="lstInstituciones" class="col-2 col-form-label">Instituciòn</label>
			<div class="col-10">
			    <select class="form-control" name="lstInstituciones" >
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
			<select class="form-control"  name="lstRoles">
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
				<select class="form-control"  name="lstTipoDoc" >
				<option value="">Seleccione</option>
				<option  value="1">Cèdula ciudadanìa</option>
				<option value="2">Tarjeta Identidad</option>
				<option value="3">Cèdula extranjerìa</option>
				<option value="4">otro</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
				<label for="txtNro_doc" class="col-2 col-form-label">Nùmero</label>
				<div class="col-10">
					<input class="form-control"  type="number" id="txtNro_doc" name="txtNro_doc">
				</div>
		</div>
		<div class="form-group row">
				<label for="txtNombres" class="col-2 col-form-label">Nombres</label>
				<div class="col-10">
					<input class="form-control"  type="text" id="txtNombres" name="txtNombres" >
				</div>
		</div>	
		<div class="form-group row">
				<label for="txtApellidos" class="col-2 col-form-label">Apellidos</label>
				<div class="col-10">
					<input class="form-control"  type="text" id="txtApellidos"  name="txtApellidos">
				</div>
		</div>
		<div class="form-group row">
				<label for="rdb1" class="col-2 form-check-label">
					<input type="radio" id="rdb1" name="rdbSexo" value="1" checked> Masculino<br>
				</label>
					<label for="rdb2"  class="form-check-label">
					<input type="radio" id="rdb2"  name="rdbSexo" value="2"> Femenino<br>
					</label>
					<label for="rdb3"   class="form-check-label">
					<input type="radio" id="rdb3"  name="rdbSexo" value="3"> Otro
					</label>
				
		</div>	
		<div class="form-group row">
				<label for="txtFecha_nacimiento" class="col-2 form-check-label">Fecha de nacimiento</label>
				<div class="col-10">
					<input class="form-control"  type="Date" id="txtFecha_nacimiento"  name="txtFecha_nacimiento">
				</div>
		</div>
		<div class="form-group">
				<label for="txtFoto"  class="col-2 form-check-label" >Foto</label>
				<input type="file" name="imagen" id="imagen" />
		</div>
<input class="btn btn-default"  type="submit" name='btnIngresar' value='Ingresar'>

</td>
</tr>
</table>
</form>
</body>

</html>
