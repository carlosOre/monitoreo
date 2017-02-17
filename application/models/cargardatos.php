<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ion_auth_model extends CI_Model
{
	public valor;
	public nombre;

	public function __construct( valor, nombre){
		$this->valor =$valor;
		$this->nombre = $nombre;
	}

	public function 

	// iot.php
    // Importamos la configuración
    require("config.php");
    // Leemos los valores que nos llegan por GET
    $valor = mysqli_real_escape_string($con, $_GET['valor']);
    // Esta es la instrucción para insertar los valores
    $query = "INSERT INTO valores(valor) VALUES('".$valor."')";
    // Ejecutamos la instrucción
    mysqli_query($con, $query);
    mysqli_close($con);
    echo "datos guardados";
?>
