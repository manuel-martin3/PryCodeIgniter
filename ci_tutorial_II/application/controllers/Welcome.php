<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_m');
	}
	public function index()
	{
		$data['title']='CRUD';
		$this->load->view('welcome_message',$data);
	}

	/*Guardar*/
	public function save_()
	{
		$validasi=array(
			array('field'=>'nim','label'=>'nim','rules'=>'required|is_unique[person.nim]'),
		);

		$this->form_validation->set_rules($validasi);
		if ($this->form_validation->run()===FALSE) {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}else{
			$info['success']=TRUE;
			$data=array(
				'nim'=>$this->input->post('nim'),
				'FirstName'=>$this->input->post('FirstName'),
				'LastName'=>$this->input->post('LastName'),
				'phone'=>$this->input->post('phone'),
				'address'=>$this->input->post('address'),
				'city'=>$this->input->post('city'),
				'country'=>$this->input->post('country')
			);
			$this->mahasiswa_m->save_data($data);
			$info['message']="Guardado con éxito";
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($info));
	}

	/*Actualizar*/
	public function update_()
	{
		$validasi=array(
			array('field'=>'nim','label'=>'nim','rules'=>'required'),
		);
		$this->form_validation->set_rules($validasi);
		if ($this->form_validation->run()===FALSE) {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}else{
			$info['success']=TRUE;
			$data=array(
				'nim'=>$this->input->post('nim'),
				'FirstName'=>$this->input->post('FirstName'),
				'LastName'=>$this->input->post('LastName'),
				'phone'=>$this->input->post('phone'),
				'address'=>$this->input->post('address'),
				'city'=>$this->input->post('city'),
				'country'=>$this->input->post('country')
			);
			$this->mahasiswa_m->update_data($data);
			$info['message']="Cambió exitosamente";
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($info));
	}

	/*Mostrar Datos*/
	public function show_()
	{
		$tampil_mhs = $this->mahasiswa_m->show_data();
		$data=array();
		foreach ($tampil_mhs as $rows) {
			array_push($data,
				array(
					$rows['nim'],
					$rows['FirstName'],
					$rows['LastName'],
					$rows['phone'],
					$rows['address'],
					$rows['city'],
					$rows['country'],
					'<a href="javascript:void(0)" class="btn btn-info btn-xs" onclick="update_dat('."'".$rows['nim']."'".')">Update</a>'.
					'&nbsp;<a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="delete_dat('."'".$rows['nim']."'".')">Delete</a>'
				)
			);
		}
		$this->output->set_content_type('application/json')->set_output(json_encode(array('data'=>$data)));
	}

	/*mostrar cambio*/
	public function show_row_()
	{
		$nim=$this->input->post('nim');
		$data=$this->mahasiswa_m->show_row_data($nim);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	/*Eliminar*/
	public function delete_()
	{
		$validasi=array(
			array('field'=>'nim','rules'=>'required')
		);
		$this->form_validation->set_rules($validasi);
		if ($this->form_validation->run()===FALSE) {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}else{
			$info['success']=TRUE;
			$data=array(
				'nim'=>$this->input->post('nim')
			);
			$this->mahasiswa_m->delete_data($data);
			$info['message']='Datos borrados con éxito';
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($info));
	}
}
