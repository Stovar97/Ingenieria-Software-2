
<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class utilidades{

			public function traerMenuAdministracion()
			{
				try {
				$result="";
				$result .="<nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">";
				$result .="  <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
				$result .="    <span class=\"navbar-toggler-icon\"></span>";
				$result .="  </button>";
				 $result .="  <a class=\"navbar-brand fa fa-university fa-4x\" href=\"·\"></a>";
				$result .="  <a class=\"navbar-brand fa fa-cubes\" href=\"../instituciones/listarInstituciones.php\">Instituciones</a>";
				$result .="  <a class=\"navbar-brand fa fa-book\" href=\"../Asignaturas/listarAsignaturas.php\">Asignaturas</a>";
				$result .="  <a class=\"navbar-brand fa fa-calendar\" href=\"../periodos/listarPeriodos.php\">Periodos</a>";
				$result .="  <a class=\"navbar-brand fa fa-black-tie\" href=\"../roles/listarRoles.php\">Roles</a>";
				$result .="  <a class=\"navbar-brand fa fa-users\" href=\"../personas/listarPersonas.php\">Personas</a>";
				$result .="  <a class=\"navbar-brand fa fa-user\" href=\"../usuarios/listarUsuarios.php\">Usuarios</a>";
				$result .="  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">";
				$result .="    <ul class=\"navbar-nav mr-auto\">";
				$result .="    </ul>";
				$result .="    <form class=\"form-inline my-2 my-lg-0\">";
				$result .="    <h6><span class=\"label label-default fa fa-user\">" . $_SESSION['username'] . "</br><a class=\"navbar-brand fa fa-id-card-o\" href=\"../seguridad/cerrarSesion.php\">Cerrar sesion</a></span></h6>";
				$result .="    </form>";
				$result .="  </div>";
				$result .="</nav>";
				return $result;
				}catch(Exception $E){
			
				}

			}

}
 ?>