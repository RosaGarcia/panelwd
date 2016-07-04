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
			//$datos=$this->usuarios_model->getUsuarios();
			$this->layout->view('index');
		}

    public function show()
        {
        	$this->layout->view('show');
        }        		
    
}

