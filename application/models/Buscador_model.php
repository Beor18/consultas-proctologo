<?php
	
	class Buscador_model extends CI_Model{
		public function GetAll(){
			$q = $this->db->get('buscar');
			return $q->result();
		}
		
	}