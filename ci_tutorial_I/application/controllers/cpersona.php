<?php 	

/**
* clase controlador persona
*/
class cpersona extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();		
		$this->load->model('mpersona');
		$this->load->model('musuario');
		$this->load->library('encrypt');
	}

	public function index(){
		//implementado Bootstrap
		$this->load->library('pagination');
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('persona/vpersona');
		$this->load->view('layout/footer');
	}

	public function mostrar(){

	}

	public function busqueda(){
		
	}


	public function guardar(){
		$param['nombre'] = $this->input->post("txt_nombre");
		$param['appaterno'] = $this->input->post("txt_appaterno");
		$param['apmaterno'] = $this->input->post("txt_apmaterno");
		$param['email'] = $this->input->post("txt_email");
		$param['dni'] = $this->input->post("txt_dni");		
		$param['fecnac'] = $this->input->post("txt_fecnac");


		$lastid = $this->mpersona->guardar($param);

		if ($lastid>0) {
			# code...
			//usuario
			$paramusu['nomUsuario'] = $this->input->post("txt_usuario");
			$paramusu['clave'] = sha1($this->input->post("txt_clave"));
			$paramusu['idPersona'] = $lastid;
			$this->musuario->guardarusuario($paramusu);
		}
	}

	public function actualizarDatos(){
		$param['nombre'] = $this->input->post('txt_nombre');
		$param['appaterno'] = $this->input->post('txt_appaterno');
		$param['apmaterno'] = $this->input->post('txt_apmaterno');
		$param['email'] = $this->input->post('txt_email');
		
		$this->mpersona->actualizarDatos($param);

		//redireccionamiento
		//forma 1
		$this->load->view('persona/vpersona');

		//forma 2
		//redirect('cpersona/index');
	}

	public function eliminarPersona(){
	$idp = $this->input->post('txt_idpersona');
	$this->musuario->eliminarUsuario($idp);
	$this->mpersona->eliminarPersona($idp);
	
	}

	public function getPersona(){
		echo json_encode($this->mpersona->getPersona());

	}
}

?>