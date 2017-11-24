<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_m extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	/*Guardar*/
	public function save_data($data)
	{
		$this->db->insert('person', $data);
		return TRUE;
	}

	/*Actualizar*/
	public function update_data($data)
	{
		$this->db->where(array('nim'=>$data['nim']));
		$this->db->update('person', $data);
		return TRUE;
	}

	/*Mostar Datos*/
	public function show_data()
	{
		$this->db->select('*');
		$this->db->from('person');
		$query=$this->db->get();
		return $query->result_array();
	}

	/*Mostrar Cambio*/
	public function show_row_data($nim)
	{
		$this->db->select('*');
		$this->db->from('person');
		$this->db->where('id',$nim);
		$query=$this->db->get();
		return $query->row_array();
	}

	/*Eliminar*/
	public function delete_data($data)
	{
		$this->db->where(array('nim'=>$data['nim']));
		$this->db->delete('person');
		return TRUE;
	}

}

/* End of file Mahasiswa_m.php */
/* Location: ./application/models/Mahasiswa_m.php */
