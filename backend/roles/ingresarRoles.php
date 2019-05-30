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
<form method="post" action="ingresarRol.php">
        <table width="90%">
            <tr>
                <td>
				<div class="form-group row">
                        <label for="txtNombres" class="col-2 col-form-label">Nombres</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="txtNombres" name="txtNombres">
                        </div>
                    </div>	
					<div class="form-group row">
                        <label for="txtDescripcion" class="col-2 col-form-label">Descripción</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="txtDescripcion" name="txtDescripcion">
                        </div>
                    </div>	
				</td>
                </tr>
            </table>
				<input class="btn btn-default"  type="submit" name='btnIngresar' value='Ingresar'>
        </form>

</body>
</html>