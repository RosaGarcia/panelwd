<?php
$config=array
(
    /**
     * Formulario
     */
    'usuario/nuevo'
        => array(
        	array('field' => 'nom',   'label' => 'Nombre',   'rules' => 'required|is_string|trim'),
        	array('field' => 'usua',   'label' => 'Usuario',   'rules' => 'required|is_string|trim'),
        	array('field' => 'pass',   'label' => 'Contraseña',   'rules' => 'required|is_string|trim')
        	),
    'warriors/nuevo'
        => array(
            array('field' => 'dyn', 'label' => 'DynDNS', 'rules' => 'required|trim'),
            array('fiel' => 'usua', 'label' => 'Usuario', 'rules' => 'required|trim'),
            array('fiel' => 'pass', 'label' => 'Contraseña', 'rules' => 'required|trim')
            ),

	);