<?php

session_start();
unset ($SESSION['username']);
 unset ($_SESSION['loggedin']);
 unset   ($_SESSION['username']);
unset	($_SESSION['idInstitucion']);
unset    ($_SESSION['start']);
unset    ($_SESSION['expire']);
unset	($_SESSION['nombreInstitucion']);
unset	($_SESSION['numeroRol']);
unset	($_SESSION['numeroPersona']);

session_destroy();
	header('Location:login.html');

?>