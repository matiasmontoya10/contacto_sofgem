<?php

class Modelo extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db->query("SET lc_time_names = 'es_CL'");
    }

    public function modelo_crear_contacto_tributario($razon_social, $rut_empresa, $direccion, $localidad, $giro, $email, $numero, $representante_nombre_legal, $representante_rut_legal) {
        $data = array("razon_social_contacto" => $razon_social,
            "rut_empresa_contacto" => $rut_empresa,
            "direccion_contacto" => $direccion,
            "localidad_contacto" => $localidad,
            "giro_contacto" => $giro,
            "correo_contacto" => $email,
            "telefono_contacto" => $numero,
            "nombre_representante_contacto" => $representante_nombre_legal,
            "rut_representante_contacto" => $representante_rut_legal
        );
        return $this->db->insert("contacto_tributario", $data);
    }

}
