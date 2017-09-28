<?php 

/**
* 
*/
class mCiudad extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent:: __construct();
	}

	public function getCiudades($s){
		$s = $this->db->get_where('ciudades', array('sitReg'=>$s));
		return $s->result();
	}	
}

 ?>