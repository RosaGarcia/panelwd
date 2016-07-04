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
        	array('field' => 'pass',   'label' => 'Contrasena',   'rules' => 'required|is_string|trim|xss_clean')
        	),


	);