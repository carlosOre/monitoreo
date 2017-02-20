<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cargardatos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

  function Cargardatos(){
    parent::__construct();
    $this->load->library(array('session','form_validation'));
    $this->load->helper(array('form', 'url', 'language'));
		$this->load->database();
    $this->load->model('Dato', '', TRUE);
	}


	public function index()
	{
    if ($this->input->ip_address() == '163.10.84.148'){
		  $valor = $this->input->get('valor', TRUE);
		  echo $valor;
		  $this->load->model('Dato', '', TRUE);
      $this->Dato->save($valor);
    }
    $datos['datos'] = $this->Dato->load();
	  $this->load->view('index',$datos);
	}
}
