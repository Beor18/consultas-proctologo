<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subir extends CI_Controller {

	function __construct() {

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
        die();
    }
    parent::__construct();
    $this->load->library('form_validation');
	$this->load->helper('url');
}


	public function insertar(){
		//$this->form_validation->set_rules('nombre', 'dni', 'required');
		$buscar = array(
			'nombre' => $this->input->post('nombre'),
			'dni' => $this->input->post('dni'),
			'nacimiento' => $this->input->post('nacimiento'),
			'sexo' => $this->input->post('sexo'),
			'preguntauno' => $this->input->post('preguntauno'),
			'preguntados' => $this->input->post('preguntados'),
			'preguntatres' => $this->input->post('preguntatres'),
			'fotos' => $this->input->post('fotos'),
			);

			

		$this->load->model('subir_model');
		if ( $this->subir_model->insertar_persona($buscar) )
			redirect('subir');	 
	}



	
	public function index(){		
		$data['title'] = 'Inicio';
		$data['main_content'] = 'inicio';
		$this->load->model('subir_model');
				
		
		
		$this->load->view('main_template',$data);
	}
}
