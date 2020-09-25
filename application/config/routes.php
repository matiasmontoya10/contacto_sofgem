<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'cliente';
$route['404_override'] = 'cliente/error_404';
$route['translate_uri_dashes'] = FALSE;

$route['enviar_formulario_cliente'] = 'cliente/controlador_enviar_formulario';



