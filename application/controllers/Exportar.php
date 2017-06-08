<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Exportar extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('mysql_to_excel_helper');
	}
 
	public function index()
	{
		$this->load->model('excel');
		to_excel($this->excel->get(), "archivoexcel");
	}
 
}