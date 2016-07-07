<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('Usuarios_model','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');


   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->helper(array('form'));
     $this->load->view('login/login_view');
   }
   else
   {
     //Go to private area
     //$session_data = $this->session->userdata('logged_in');
     //$data['usuario'] = $session_data['usuario'];
     $datos=$this->Equipos_model->getEquipos();
     redirect(base_url().'',compact("datos"));
     //$this->load->view('warriors/index',compact("datos"));   
   }

 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   
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
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>