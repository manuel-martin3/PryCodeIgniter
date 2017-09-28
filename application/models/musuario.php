<?php 

/**
* 
*/
class mUsuario extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent:: __construct();
	}

	public function guardarusuario($param){
		$campos = array(
			'nomUsuario' => $param['nomUsuario'], 
			'clave' => $param['clave'], 
			'idPersona' => $param['idPersona'], 
			);

		$this->db->insert('usuario',$campos);
	}

	public function eliminarUsuario($idp){
		$this->db->where('idPersona',$idp);
		$this->db->delete('usuario');

	}
}

 ?>