<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SofGem Contacto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/fonts/icomoon/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/aos.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/style.css">
        <link rel="icon" href="<?php echo base_url(); ?>framework/imagenes/icon_sofgem.png" sizes="32x32" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/toast/toastr.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/resolucion.css">
    </head>
    <body>
        <div class="site-wrap">
            <div class="border-bottom top-bar py-2 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12" style="color: #616161">
                            <p class="mb-0 ocultar-div" style="text-align: center">
                                <a href='https://api.whatsapp.com/send?phone=56839509055&text="Hola, quiero conocer más acerca de SofGem."&source=&data=&app_absent=' style="color: #616161"><i class="fab fa-whatsapp"></i><strong> +56939509055 | </strong></a>
                                <a style="color: #616161"><i class="far fa-envelope"></i><strong> ventas@sofgem.cl</strong></a>
                            </p>
                            <p class="mb-0 mostrar-div" style="text-align: center">
                                <a style="color: #616161"><i class="far fa-envelope"></i><strong> ventas@sofgem.cl</strong></a>
                                <br>
                                <a href='https://api.whatsapp.com/send?phone=56939509055&text="Hola, quiero conocer más acerca de SofGem."&source=&data=&app_absent=' style="color: #616161"><i class="fab fa-whatsapp"></i><strong> +56939509055</strong></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <header class="py-4" style="background: #212121">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <img src="http://blog.sofgem.cl/framework/imagenes/iconos/sofgem.png" alt="sofgem" width="165" height="42.5" class="rounded mx-auto d-block">
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="bg-light">
            <form id="formulario_registrar" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <br>
                            <h3 style="color: #212121" class="text-center"><b style="color: #6eae3a">Formulario de Contacto</b></h3>
                            <p style="text-align: center"><b style="color: #212121">Para enviar sus datos tributarios deberá completar todos los campos obligatorios (*) indicados en nuestro formulario.</b></p>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="razon_social">Razón Social: (*)</label>
                                <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="SofGem Ltda" maxlength="150" style="border-color: #8bc34a">
                            </div>
                            <div class="form-group">
                                <label for="rut_empresa">Rut Empresa: (*) <b>(incluir guión, sin puntos ni espacios)</b></label>
                                <input type="text" class="form-control" id="rut_empresa" name="rut_empresa" placeholder="76569958-4" maxlength="20" style="border-color: #8bc34a">
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección: (*)</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="10 oriente #1041" maxlength="100" style="border-color: #8bc34a">
                            </div>
                            <div class="form-group">
                                <label for="localidad">Localidad: (*)</label>
                                <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Talca" maxlength="50" style="border-color: #8bc34a">
                            </div>
                            <div class="form-group">
                                <label for="giro">Giro: (*)</label>
                                <input type="text" class="form-control" id="giro" name="giro" placeholder="Servicios Informáticos" maxlength="200" style="border-color: #8bc34a">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="email">E-mail: (*)</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="sofgem@sofgem.cl" maxlength="60" style="border-color: #8bc34a">
                            </div>
                            <div class="form-group">
                                <label for="numero">Número contacto: (*)</label>
                                <input type="text" class="form-control validar_numero" id="numero" name="numero" placeholder="983006194" maxlength="15" style="border-color: #8bc34a">
                            </div>
                            <div class="form-group">
                                <label for="representante_nombre_legal">Nombre representante: (*)</label>
                                <input type="text" class="form-control" id="representante_nombre_legal" name="representante_nombre_legal" placeholder="Nombre y Apellido" maxlength="60" style="border-color: #8bc34a">
                            </div>
                            <div class="form-group">
                                <label for="representante_rut_legal">Rut representante: (*) <b>(incluir guión, sin puntos ni espacios)</b></label>
                                <input type="text" class="form-control" id="representante_rut_legal" name="representante_rut_legal" placeholder="12345678-9" maxlength="20" style="border-color: #8bc34a">
                            </div>
                            <div class="form-group">
                                <label for="clave_firma"><b>(opcional)</b> Clave firma electrónica:</label>
                                <input type="password" class="form-control" id="clave_firma" name="clave_firma" placeholder="******" maxlength="50" style="border-color: #8bc34a">
                            </div>
                            <div class="form-group">
                                <label for="archivo"><b>(opcional)</b> Adjunte logo empresa y firma electrónica comprimidos (.rar o .zip), max 500KB.</label>
                                <input type="file" class="form-control-file" id="archivo" name="archivo">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12" style="text-align: center">
                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-success btn-md text-white" id="enviar_formulario">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <footer class="site-footer" style="background: #212121">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4" style="text-align: center">
                                <h2 class="footer-heading mb-4">Nosotros</h2>
                                <p style="text-align: justify">Queremos contribuir con soluciones innovadoras a las pequeñas, medianas y grandes empresas de nuestro país, para que puedan gestionar eficientemente sus negocios.</p>
                            </div>
                            <div class="col-md-4" style="text-align: center">
                                <h2 class="footer-heading mb-4">Síguenos</h2>
                                <h2>
                                    <a href="https://www.instagram.com/sofgem_chile/?hl=es-la" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                    <a href="https://www.facebook.com/Sofgem/?modal=admin_todo_tour" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                                    <a href="https://twitter.com/sofgem?lang=es" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                </h2>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <h2 class="footer-heading mb-4" style="text-align: center">Encuéntranos</h2>
                                <p style="text-align: center">
                                    10 oriente #1041 Talca, Chile
                                    <br>
                                    Lunes a Viernes: 09:00 AM a 19:00 PM
                                    <br>
                                    Sábado: 09:00 AM a 14:00 PM
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                © Todos los derechos reservados por SofGem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo base_url(); ?>framework/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/jquery.stellar.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/jquery.countdown.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/aos.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/typed.js"></script>
        <script src="<?php echo base_url(); ?>framework/toast/toastr.min.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/custom5.js"></script>
        <script src="<?php echo base_url(); ?>framework/js/main.js"></script>
        <script>
            $('.validar_numero').on('input', function () {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        </script>
    </body>
</html>