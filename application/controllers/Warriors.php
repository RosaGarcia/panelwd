<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warriors extends CI_Controller
 {
    public  function  __construct() 
        { 
            parent:: __construct(); 
            $this->layout->setLayout('template');
        } 

	public function index()
		{	
			$datos=$this->Equipos_model->getEquipos();
			$this->layout->view('index',compact("datos"));
		}

        public function nuevo()
        {

            if($this->input->post())
            {
                if($this->form_validation->run("warriors/nuevo") == false)
                {
                  
                    $datos=array
                    (
                        'dyndns' => $this->input->post("dyn",true),
                        'usuario' => $this->input->post("usua",true),
                        'contrasena' => base64_encode($this->input->post("pass",true))
                    );
                    $guardar=$this->Equipos_model->insertarEquipos($datos);
                    if($guardar)
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha agragado el ususario exitosamente');
                        redirect(base_url().'warriors/index', 301);
                    }
                    else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo de nuevo.');
                        redirect(base_url().'warriors/new',  301);
                    }
                }
            }

            $this->layout->view('new');
        }

    public function show()
        {
        	$this->layout->view('show');
        }

    public function edit($id=null)
    {
        if($this->input->post())
        {
            if($this->form_validation->run("warriors/nuevo") == false)
            { 
                $datos=array
                (
                    'dyndns'=> $this->input->post("dyn",true),
                    'usuario'=> $this->input->post("usua",true),
                    'contrasena'=> sha1($this->input->post('pas',true))   
                    );
                $guardar=$this->Equipos_model->editEquipos($datos,$id);
                if($guardar)
                {
                    $this->session->set_flashdata('ControllerMessage', 'Se ha editado el ususario exitosamente');
                    redirect(base_url().'warriors/index', 301);
                }
                else
                {
                    $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo de nuevo.');
                    redirect(base_url().'warriors/edit/'.$id,  301);
                }
            }
        }
                $datos=$this->Equipos_model->getEditEquipos($id);
                if(sizeof($datos) == 0)
                {
                    show_404();
                } 
                $this->layout->view('edit',compact("datos"));
    }

    public function delete($id=null)
    {
        $guardar=$this->Equipos_model->eliminar($id);
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
    
}

