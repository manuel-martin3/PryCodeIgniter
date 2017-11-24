<?php 

/**
* 
*/
class cCiudad extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent:: __construct();
		$this->load->model('mciudad');
	}

	public function getCiudades(){
		$r = $this->input->post('sitReg');	
		$resultado = $this->mciudad->getCiudades($r);

		echo json_encode($resultado);
	}	
}

 ?>