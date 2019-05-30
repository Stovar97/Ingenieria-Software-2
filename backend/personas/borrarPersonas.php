<?php
			$id = 0;
			if(!empty($_GET['id'])){
				$id=$_GET['id'];
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
<body>
<form method="post" action="borraPersona.php">
	<input   type="hidden" id="PK_numero" name="PK_numero" value="<?php echo $id; ?>">	
	<table width="90%">
		<tr>
		<td>
		Desea eliminar el registro : <?php echo $id; ?>
		</td>
		</tr>
		<tr>
		<td>
		<input class="btn btn-default"  type="submit" name='btnIngresar' value='Borrar'>
		</td>
		</tr>
		</table>
		<br>
<br>
<br>
<br>

</form>
</body>
</html>