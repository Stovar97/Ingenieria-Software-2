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
<body>
    <form method="post" action="ingresarUsuario.php">
        <table width="90%">
            <tr>
                <td>
					<div class="form-group row">
						<label for="lstTipoUsuario" class="col-2 col-form-label">Tipo Usuario</label>
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
                        <label for="txtNombres" class="col-2 col-form-label">Usuario : </label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="txtNombres" name="txtNombres">
                        </div>
                    </div>	
                    <div class="form-group row">
                        <label for="txtPassword" class="col-2 col-form-label">Password : </label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="txtPassword" name="txtPassword">
                        </div>
                    </div>	
                    <div class="form-group row">
                        <label for="txtNroPersona" class="col-2 col-form-label">Nùmero persona</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="txtNroPersona" name="txtNroPersona">
                        </div>
                    </div>
                </td>
            </tr>
        </table>
			<input class="btn btn-default"  type="submit" name='btnIngresar' value='Ingresar'>
    </form>

</body>
</html>