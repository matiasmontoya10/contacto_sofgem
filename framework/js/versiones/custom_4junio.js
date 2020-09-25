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
    var base_url = "http://promocion.sofgem.cl/";

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
});