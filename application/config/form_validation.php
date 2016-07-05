<?php
$config=array
(
    /**
     * Formulario
     */
    'usuario/nuevo'
        => array(
        	array('field' => 'nom',   'label' => 'Nombre',   'rules' => 'required|is_string|trim|xss_clean'),
        	array('field' => 'usua',   'label' => 'Usuario',   'rules' => 'required|is_string|trim|xss_clean'),
        	array('field' => 'pass',   'label' => 'Contraseña',   'rules' => 'required|is_string|trim|xss_clean')
        	),
    'warriors/nuevo'
        => array(
            array('field' => 'dyn', 'label' => 'DynDNS', 'rules' => 'required|trim|xss_clean'),
            array('fiel' => 'usua', 'label' => 'Usuario', 'rules' => 'required|trim|xss_clean'),
            array('fiel' => 'pass', 'label' => 'Contraseña', 'rules' => 'required|trim|xss_clean')
            ),


	);