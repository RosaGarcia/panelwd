<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller
 {
    public  function  __construct() 
    { 
        parent:: __construct(); 
        $this->layout->setLayout('template');
    } 

	public function index()
	{	
        if($this->session->userdata('logged_in'))
        {
    		$datos=$this->Usuarios_model->getUsuarios();
    		$this->layout->view('index',compact("datos"));
        }
        else
        {
            $this->load->helper(array('form'));
            $this->load->view('login/login_view');

        }
	}

    public function nuevo()
    {
        if($this->session->userdata('logged_in'))
        {
            if($this->input->post())
            {
                if($this->form_validation->run("usuario/nuevo"))
                {
                  
                    $datos=array
                    (
                        'nombre' => $this->input->post("nom",true),
                        'usuario' => $this->input->post("usua",true),
                        'contrasena' => md5($this->input->post("pass",true))
                    );
                    $guardar=$this->Usuarios_model->insertar_usuario($datos);
                    if($guardar)
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha agragado el ususario exitosamente');
                        redirect(base_url().'usuario/index', 301);
                    }
                    else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo de nuevo.');
                        redirect(base_url().'usuario/new',  301);
                    }
                }
            }

            $this->layout->view('new');
        }
        else
        {
            $this->load->helper(array('form'));
            $this->load->view('login/login_view');

        }
    }

    public function edit($id=null)
    {
        if($this->session->userdata('logged_in'))
        {
            if($this->input->post())
            {
                if($this->form_validation->run("usuario/nuevo"))
                { 
                    $datos=array
                    (
                        'nombre'=> $this->input->post("nom",true),
                        'usuario'=> $this->input->post("usua",true),
                        'contrasena'=> sha1($this->input->post('pas',true))   
                        );
                    $guardar=$this->Usuarios_model->modificar_usuario($datos,$id);
                    if($guardar)
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha editado el ususario exitosamente');
                        redirect(base_url().'usuario/index', 301);
                    }
                    else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo de nuevo.');
                        redirect(base_url().'usuario/edit/'.$id,  301);
                    }
                }
            }
                    $datos=$this->Usuarios_model->getUsuarioId($id);
                    if(sizeof($datos)==0)
                    {
                        show_404();
                    } 
                    $this->layout->view('edit',compact("datos"));
        }
        else
        {
            $this->load->helper(array('form'));
            $this->load->view('login/login_view');

        }
    }

    public function delete($id=null)
    {
        if($this->session->userdata('logged_in'))
        {
            $guardar=$this->Usuarios_model->eliminar($id);
            if($guardar)
            {
                $this->session->set_flashdata('ControllerMessage', 'Se ha eliminado el ususario exitosamente');
                redirect(base_url().'usuario/index', 301);
            }
            else
            {
                $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo de nuevo.');
                redirect(base_url().'usuario/index',  301);
            }
        }
        else
        {
            $this->load->helper(array('form'));
            $this->load->view('login/login_view');

        }
    }

}

