<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_query extends CI_Model
{
  var $table = "users";
  public function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
  }

  public function login($username, $password)
  {

      $this->db->select('*');
      $this->db->from('users');
      $this->db->where(['username'=>$username,'password'=>$password]);
      $return = $this->db->get('');

      if ($return->num_rows() > 0) {

          foreach ($return->result() as $row)
          {
            if ($row->level=="admin")
            {
                  $session = array('level' =>$row);
            }
            $this->load->view('v_estudiante');
            //redirect('v_estudiante', 'refresh');
          }
          //echo "entro";
      }
      else {
        $this->session->set_flashdata('mensaje','<strong>Usuario o Contraseña</strong></br> no son validos..!');
        redirect('C_tutorial', 'refresh');
      }
  }

  public function dataEstudiante(){
    $this->db->select('*');
    $this->db->from('student');
    $this->db->order_by('nim', 'asc');
    $data = $this->db->get('');
    return $data;
  }

  public function tablaEstudiante($data)
  {
    $this->db->insert('student', $data);
  }


}
