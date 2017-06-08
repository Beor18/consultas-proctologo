<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscador extends CI_Controller {

	function __construct() {

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
        die();
    }
    parent::__construct();
}

	
	public function index()
	{
		$this->load->model('buscador_model');
		$fabricas = $this->buscador_model->GetAll();
		echo json_encode($fabricas);
	}
}
