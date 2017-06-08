<?php
	
	class Subir_model extends CI_Model{
		public function insertar_persona($buscar){
		if ( $this->db->insert('buscar',  $buscar) )
			return true;
				
		else
			return false;
	}
	
		
	}