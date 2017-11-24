<?php 
/**
* clase controlador login
*/
class cLogin extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent:: __construct();
		$this->load->model('mlogin');
		
	}

	public function index(){
		$data['mensaje'] = '';
		$this->load->view('vlogin',$data);
	}

	public function ingresar(){
		$usu = $this->input->post('txt_usuario');
		$pass = sha1($this->input->post('txt_clave'));

		$res = $this->mlogin->ingresar($usu,$pass);

		if ($res==1) {
			# code...
			//antes de plantilla bootstrap
			//$this->load->view('persona/vupdpersona');
			//con plantilla botstrap
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('persona/vupdpersona');
			$this->load->view('layout/footer');
		}else{
			$data['mensaje']="Usuario o contraseña erronea";
			$this->load->view('vlogin',$data);
		}

	}
}

?>