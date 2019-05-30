<?php 


//conexion a la base de datos
class Conexion{

//atributos

	private $db= 'mysql:host=localhost;dbname=mydb';
	private $user= 'root';
	private $pass= '/*-grmg01510006362000/*-';

//funcion return valor verdadero o falso
	public function Conectar()
	{
			try {
				$base = new PDO($this->db,$this->user,$this->pass);//instanciar
				return $base;
			} catch (Exception $e) {
				echo 'error de conexion :<'.$e->getMessage();
			}
		}
	}
 ?>



