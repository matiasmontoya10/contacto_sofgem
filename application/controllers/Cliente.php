<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modelo");
    }

    public function index() {
        $this->load->view('paginas_landing/index');
    }

    public function error_404() {
        redirect('cliente/index', 'refresh');
    }

    public function controlador_enviar_formulario() {

        $razon_social = $this->input->post("razon_social");
        $rut_empresa = $this->input->post("rut_empresa");
        $direccion = $this->input->post("direccion");
        $localidad = $this->input->post("localidad");
        $giro = $this->input->post("giro");
        $email = $this->input->post("email");
        $numero = $this->input->post("numero");
        $representante_nombre_legal = $this->input->post("representante_nombre_legal");
        $representante_rut_legal = $this->input->post("representante_rut_legal");
        $clave_firma = $this->input->post("clave_firma");

        $this->modelo->modelo_crear_contacto_tributario($razon_social, $rut_empresa, $direccion, $localidad, $giro, $email, $numero, $representante_nombre_legal, $representante_rut_legal);

        $fecha_unica = date("Y-m-d H:i:s");
        $fecha_unica = str_replace(":", "-", $fecha_unica);
        $fecha_unica = str_replace(" ", "", $fecha_unica);

        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        
        //Ingresar correo y clave para el envió de mensajes.
        
        $mail->Username = '';
        $mail->Password = '';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('mmontoya@sofgem.cl', 'SofGem Formulario Contacto');
       
        $mail->addAddress('ltrejos@sofgem.cl');
        $mail->addCC('ventas@sofgem.cl');
        $mail->addBCC('mmontoya@sofgem.cl');
        $mail->addBCC('gerencia@sofgem.cl');

        $mail->Subject = 'Formulario de contacto - Datos del interesado';
        $mail->isHTML(false);


        if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {

            if ($_FILES['archivo']['size'] < 500000) {

                $ruta = "upload/";
                $nombre_final = trim($_FILES['archivo']['name']);
                $nombre_final = str_replace(" ", "", $nombre_final);
                $upload = $ruta . $fecha_unica . $nombre_final;

                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $upload)) {

                    if ($clave_firma == "") {
                        $clave_firma = "Clave no ingresada";
                    }

                    $mailContent = 'Razon Social: ' . $razon_social . "\n \n" . 'Rut Empresa: ' . $rut_empresa . "\n \n" . 'Direccion: ' . $direccion . "\n \n" . 'Localidad: ' . $localidad . "\n \n" . 'Giro: ' . $giro . "\n \n" . 'E-mail: ' . $email . "\n \n" . 'Número contacto: ' . $numero . "\n \n" . 'Representante legal: ' . $representante_nombre_legal . "\n \n" . 'Rut representante legal: ' . $representante_rut_legal . "\n \n" . 'Clave Firma: ' . $clave_firma;
                    $mail->Body = $mailContent;
                    $mail->addAttachment($upload);

                    if (!$mail->send()) {
                        echo json_encode(array("mensaje" => "Datos y adjunto no enviados"));
                    } else {
                        echo json_encode(array("mensaje" => "Datos y adjunto enviados"));
                    }
                } else {
                    echo json_encode(array("mensaje" => "Error al mover"));
                }
            } else {
                echo json_encode(array("mensaje" => "Excede el limite. Max 500KB"));
            }
        } else {

            if ($clave_firma == "") {
                $clave_firma = "Clave no ingresada";
            }

            $mailContent = 'Razon Social: ' . $razon_social . "\n \n" . 'Rut Empresa: ' . $rut_empresa . "\n \n" . 'Direccion: ' . $direccion . "\n \n" . 'Localidad: ' . $localidad . "\n \n" . 'Giro: ' . $giro . "\n \n" . 'E-mail: ' . $email . "\n \n" . 'Número contacto: ' . $numero . "\n \n" . 'Representante legal: ' . $representante_nombre_legal . "\n \n" . 'Rut representante legal: ' . $representante_rut_legal . "\n \n" . 'Clave Firma: ' . $clave_firma;
            $mail->Body = $mailContent;

            if (!$mail->send()) {
                echo json_encode(array("mensaje" => "Datos no enviados"));
            } else {
                echo json_encode(array("mensaje" => "Datos enviados"));
            }
        }
    }

}
