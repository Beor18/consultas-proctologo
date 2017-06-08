<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Excel extends CI_Model 
{
	public function get()
	{
		$fields = $this->db->field_data('buscar');
		$query = $this->db->select('*')->get('buscar');
		return array("fields" => $fields, "query" => $query);
	}
}