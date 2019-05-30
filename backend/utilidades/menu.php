<?php 
class utilidades{

			public function traerMenuUsuarios()
			{
				try {
				$result="";
				$result .="<nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">";
				$result .="  <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
				$result .="    <span class=\"navbar-toggler-icon\"></span>";
				$result .="  </button>";
				$result .="  <a class=\"navbar-brand\" href=\"#\">Navbar</a>";

				$result .="  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">";
				$result .="    <ul class=\"navbar-nav mr-auto\">";
				$result .="      <li class=\"nav-item active\">";
				$result .="        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>";
				$result .="      </li>";
				$result .="      <li class=\"nav-item\">";
				$result .="        <a class=\"nav-link\" href=\"#\">Link</a>";
				$result .="      </li>";
				$result .="      <li class=\"nav-item\">";
				$result .="        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>";
				$result .="      </li>";
				$result .="        <li class=\"nav-item dropdown\">";
				$result .="          <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"responsiveNavbarDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>";
				$result .="          <div class=\"dropdown-menu\" aria-labelledby=\"responsiveNavbarDropdown\">";
				$result .="            <a class=\"dropdown-item\" href=\"#\">Action</a>";
				$result .="            <a class=\"dropdown-item\" href=\"#\">Another action</a>";
				$result .="            <a class=\"dropdown-item\" href=\"#\">Something else here</a>";
				$result .="          </div>";
				$result .="        </li>";
				$result .="    </ul>";
				$result .="    <form class=\"form-inline my-2 my-lg-0\">";
				$result .="      <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">";
				$result .="      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>";
				$result .="    </form>";
				$result .="  </div>";
				$result .="</nav>";
				return $result;
				}catch(Exception $E){
				

				}

			}

}
 ?>