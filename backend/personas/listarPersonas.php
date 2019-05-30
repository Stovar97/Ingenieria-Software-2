	<?php
            require_once('gridPersonas.php');
			$clsGridPersonas = new clsGridPersonas();
			$inicio = 1;
			if(empty($_GET['pagina'])){
			$inicio=1;
			}else{
			$inicio=$_GET['pagina']+1;
			}
			$grid = $clsGridPersonas->getGrid($inicio,5);
			$total = $clsGridPersonas->getTotalPersons();

			require_once('../utilidades/paginacion.php');
			$clspaginacion = new clsPaginacion();
			$tablaPaginas = $clspaginacion->paginar($total,5,'ListarPersonas');
						
			require_once('../utilidades/menuAdministracion.php');
			$utilidades = new utilidades();
			$menu = $utilidades->traerMenuAdministracion();	

			require_once('../utilidades/toolbar.php');
			$toolbar = new toolbar();
			$mnutoolbar = $toolbar->traerToolbar();	

			require_once('../utilidades/iFrameForms.php');
			$clsIFrame = new clsIframeForm();
			$strIframe = $clsIFrame->getIFRAME('ingresarPersonas.php','800px');	

			require_once('../utilidades/iframeBorrado.php');
			$clsIFrameBorrado = new clsIframeBorrado();
			$strIframeBorrado = $clsIFrameBorrado->getIFRAME('');	

			$ini = parse_ini_file('../../config.ini');
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
			<link href="../../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
			<script type="text/javascript">
		
			function abrirModal(ID){
				if(ID==0){
					document.getElementById('myIframe').src = "ingresarPersonas.php";
				}else{
					document.getElementById('myIframe').src = "actualizarPersonas.php?id="+ID;
				}
				$('#myModal').on('hidden.bs.modal', function (e) {
				  location.reload();
				});
				$("#myModal").modal();
			}
			function abrirModalBorrado(ID){
				
					document.getElementById('myIframeBorrado').src = "borrarPersonas.php?id="+ID;
				
				$('#myModalBorrado').on('hidden.bs.modal', function (e) {
				  location.reload();
				});
				$("#myModalBorrado").modal();
			}
		    </script>
</head>
		<body>
				<div class="container">
					<header>
										<?php
											echo str_replace("REPLACETITULO","Administración de Personas",$strIframe); 
										?>
										<?php
											echo $strIframeBorrado;
										?>
										<?php
											echo $menu;
										?>
										<div class="page-header">
										  <h1>Administración de Personas<small></small></h1>
										</div>
					</header>
									
						<form>
								<section>
										<br />
										<br />
										<?php
											echo $mnutoolbar;
										?>
										<br />
										<?php
											echo $grid;
										?>
										<?php
											echo $tablaPaginas;
										?>
								</section>			
						</form>
					<footer>
					</footer>
				</div>
				
		</body>
</html>