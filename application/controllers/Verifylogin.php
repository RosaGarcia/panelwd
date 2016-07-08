<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class VerifyLogin extends CI_Controller 
{
 
   function __construct()
   {
     parent::__construct();
     $this->load->model('Usuarios_model','',TRUE);
   }
   
   function index()
   {
     //Field validation succeeded.  Validate against database
     $username = $this->input->post('username');
     $password = $this->input->post('password');
     
     //query the database
     $result = $this->Usuarios_model->login($username, $password);
   
     if($result)
     {
       $sess_array = array();
       foreach($result as $row)
       {

         $sess_array = array(
           'id' => $row->id,
           'usuario' => $row->usuario
         );
         $this->session->set_userdata('logged_in', $sess_array);
       }
       $datos=$this->Equipos_model->getEquipos();
       redirect(base_url().'',compact("datos"));
     }
     else
     {
        $this->session->set_flashdata('ControllerMessage', 'Usuario o contraseña incorrecta');
        $this->load->view('login/login_view');
     }
   }
}
