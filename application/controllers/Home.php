<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
 {
    public  function  __construct() 
        { 
            parent:: __construct(); 
            $this->layout->setLayout('template');
        } 

	public function index()
	{
		//$this->load->view('index');	
		$this->layout->view('index');
	}

	public function saludo()
	{
        $datos["titulo"]="Mi titulo desde el controlador";
        $datos["bajada"]="Esta es la bajada de texto";
	    $this->layout->view("hola",$datos);
	} 


}

