<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_estudiante extends CI_Controller {

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
      $data = $this->m_query->dataEstudiante();
      $this->load->view('v_estudiante',['data'=>$data]);
  }

  public function insertEstudiante()
  {
    $this->form_validation->set_rules('nim', 'nim', 'required');
    $this->form_validation->set_rules('nim', 'Nim', 'required');
    $this->form_validation->set_rules('FirstName', 'FirstName', 'required');
    $this->form_validation->set_rules('LastName', 'LastName', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('city', 'City', 'required');
    $this->form_validation->set_rules('country', 'Country', 'required');

    $this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

    if ($this->form_validation->run() )
    {
       $nim = $this->input->post('nim');
       $fName = $this->input->post('FirstName');
       $lame = $this->input->post('LastName');
       $phone = $this->input->post('phone');
       $address = $this->input->post('address');
       $city = $this->input->post('city');
       $country = $this->input->post('country');

       $estudiante = ([
         'nim'=>$nim,
         'FirstName'=>$fName,
         'LastName'=>$lame,
         'phone'=>$phone,
         'address'=>$address,
         'city'=>$city,
         'country'=>$country
       ]);

       $data = array_merge($estudiante);
      //  print_r($data);
      //  exit();

       if ($this->m_query->tablaEstudiante($data)==false)
       {
         $this->session->set_flashdata('mensaje','Registro de guardó exitosamente...');
         //$this->load->view('v_estudiante');
         redirect('c_estudiante','refresh');
       }else {
         $this->index();
       }
    }
    else
    {
      $this->index();
    }
  }

}
