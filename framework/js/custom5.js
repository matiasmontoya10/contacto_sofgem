$(document).ready(function () {

    //VALIDACION DE CORREO

    function validar_correo(correo) {

        var validacion = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if (validacion.test(correo)) {
            return true;
        } else {
            return false;
        }
    }

    //Funciones de la plataforma web.
    var base_url = "http://localhost/contacto_sofgem/";

    //_FUNCION QUE VALIDA UN RUT CON SU CADENA COMPLETA EJ: "19576832-2".
    var Fn = {
        validaRut: function (rut_completo) {
            //RECIBE UN RUT Y REEMPLAZA LOS CARACTERES.
            rut_completo = rut_completo.replace("‐", "-");
            //DETERMINA LA CODIFICACION DE QUE SI EL RUT QUE RECIBE NO ES VALIDO
            //, YA QUE TIENE UN SIGNO DE EXCLAMACION.
            if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test(rut_completo))
                return false;
            var tmp = rut_completo.split('-');
            var digv = tmp[1];
            var rut = tmp[0];
            if (digv == 'K')
                digv = 'k';
            //RETORNA UN RUT VALIDO.
            return (Fn.dv(rut) == digv);

        },
        //CODIFICACION QUE CALCULA EL DIGITO VERFICACADOR CONVIRTIENDO LA LETRA "K" EN 1.
        dv: function (T) {
            var M = 0, S = 1;
            for (; T; T = Math.floor(T / 10))
                S = (S + T % 10 * (9 - M++ % 6)) % 11;
            return S ? S - 1 : 'k';
        }
    };

    $("#boton_invitado_2").click(function (excepcion) {
        excepcion.preventDefault();
        var nombre_invitado_2 = $("#nombre_invitado_2").val();
        var correo_invitado_2 = $("#correo_invitado_2").val();

        if (nombre_invitado_2 == "" || correo_invitado_2 == "") {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "4000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            },
            toastr["warning"]("Complete campo(s) vacio(s).", "¡Validación!");
        } else {
            if (validar_correo(correo_invitado_2)) {
                $.ajax({
                    url: base_url + 'mensaje_invitado_modal',
                    type: 'post',
                    dataType: 'json',
                    data: {nombre_invitado_2: nombre_invitado_2, correo_invitado_2: correo_invitado_2},
                    success: function (resultado) {
                        $("#nombre_invitado_2").val('');
                        $("#correo_invitado_2").val('');
                        $('#boton_invitado_2').attr("disabled", true);
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "4000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        },
                        toastr["success"]("Serás redirigido a sofgem.cl.", resultado.resultado);
                        setTimeout(
                                function ()
                                {
                                    $(location).attr('href', 'https://www.sofgem.cl/');
                                }, 4000);
                    },
                    error: function () {
                        $("#nombre_invitado_2").val('');
                        $("#correo_invitado_2").val('');
                        $('#boton_invitado_2').attr("disabled", true);
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "4000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        },
                        toastr["success"]("Serás redirigido a sofgem.cl.", "¡Datos enviados!");
                        setTimeout(
                                function ()
                                {
                                    $(location).attr('href', 'https://www.sofgem.cl/');
                                }, 4000);
                    }
                });
            } else {
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "4000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                },
                toastr["warning"]("Correo no valido.", "¡Validación!");
            }
        }
    });

    $("#enviar_formulario").click(function (excepcion) {
        excepcion.preventDefault();

        var formularioRegistrar = $("#formulario_registrar")[0];
        var data = new FormData(formularioRegistrar);

        var estado, descripcion = "";
        var razon_social = $("#razon_social").val();
        var rut_empresa = $("#rut_empresa").val();
        var direccion = $("#direccion").val();
        var localidad = $("#localidad").val();
        var giro = $("#giro").val();
        var email = $("#email").val();
        var numero = $("#numero").val();
        var representante_nombre_legal = $("#representante_nombre_legal").val();
        var representante_rut_legal = $("#representante_rut_legal").val();

        if (razon_social == "" || rut_empresa == "" || direccion == "" || localidad == "" || giro == "" ||
                email == "" || numero == "" || representante_nombre_legal == "" || representante_rut_legal == "") {
            estado = "warning";
            descripcion = "Complete Campo(s) Vacio(s)";
            validar_vista(estado, descripcion);
        } else {
            if (Fn.validaRut(rut_empresa) && Fn.validaRut(representante_rut_legal)) {
                if (validar_correo(email)) {
                    $('#enviar_formulario').attr("disabled", true);
                    $.ajax({
                        url: base_url + 'enviar_formulario_cliente',
                        type: 'post',
                        dataType: 'json',
                        data: data,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        cache: false,
                        timeout: 600000,
                        success: function (o) {
                            estado = "info";
                            validar_vista(estado, o.mensaje);
                            $("#razon_social").val("");
                            $("#rut_empresa").val("");
                            $("#direccion").val("");
                            $("#localidad").val("");
                            $("#giro").val("");
                            $("#email").val("");
                            $("#numero").val("");
                            $("#representante_nombre_legal").val("");
                            $("#representante_rut_legal").val("");
                            $("#clave_firma").val("");
                            $("#archivo").val("");
                    	    $('#enviar_formulario').attr("disabled", false);
                        },
                        error: function () {
                            alert("Error 500");
                    	    $('#enviar_formulario').attr("disabled", false);
                        }
                    });
                } else {
                    estado = "warning";
                    descripcion = "Correo incorrecto";
                    validar_vista(estado, descripcion);
                }
            } else {
                estado = "warning";
                descripcion = "Rut(s) Inválido(s)";
                validar_vista(estado, descripcion);
            }
        }
    });

    function validar_vista(estado, descripcion) {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "4000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        },
        toastr[estado](descripcion, "¡Validación!");
    }

});