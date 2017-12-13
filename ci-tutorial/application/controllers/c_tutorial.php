<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tutorial extends CI_Controller {


  public function __construct()
  {
      parent::__construct();
      $this->load->helper('url', 'html');
      $this->load->library('session');
      $this->load->library('Form_validation');
      $this->load->model('m_query');
  }

  public function index()
  {
    if ($this->session->userdata('level')=='admin') {
      redirect('C_estudiante','refresh'); 
    }
    $this->load->view('v_tutorial');
  }

  public function user_login()
  {
    $this->form_validation->set_rules('username', 'Usuario', 'required');
    $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[3]');
    $this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

    if ($this->form_validation->run() )
    {
       $user = $this->input->post('username');
       $pass = $this->input->post('password');
       $this->m_query->login($user, $pass);
    }
    else
    {
      $this->session->set_flashdata('mensaje','<strong>Usuario o Contraseña</strong></br> no son validos..!');
      $this->index();
    }

  }

  public function fuera()
  {
      $this->session->session_destroy();
      $this->load->view('v_tutorial');
  }


}
