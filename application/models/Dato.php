<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dato extends CI_Model
{
  public function save($valor){
		  $query = $this->db->query('INSERT INTO valores(valor) VALUES('.$valor.')');
	}
  
  public function load(){
	  $query = $this->db->query('SELECT * FROM valores');
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $registro) 
        $retorno[] = $registro;
    }

  return $retorno;
  }
}
?>
