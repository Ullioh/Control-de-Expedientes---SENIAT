var keyup_cedula = /^[0-9]{7,9}$/;
var keyup_nombre = /^[A-ZÁÉÍÓÚ][A-Za-zñáéíóú\s]{2,30}$/;
var keyup_correo =  /^[A-Za-z0-9_\u00d1\u00f1\u00E0-\u00FC]{3,25}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,4}$/;
var keyup_clave = /^[A-ZÁÉÍÓÚa-zñáéíóú0-9,.#%$^&*:\s]{6,20}$/;

document.onload = carga();
function carga() {
  /*--------------VALIDACION PARA CEDULA--------------------*/
  document.getElementById("user").maxLength = 11;
  document.getElementById("user").onkeypress = function (e) {
    er = /^[JGVEP0-9-]*$/;
    validarkeypress(er, e);
  };
  document.getElementById("contrasena").maxLength = 30;
  document.getElementById("contrasena").onkeypress = function (e) {
    er = /^[A-Za-z0-9\s\b\u00f1\u00d1\u00E0-\u00FC]*$/;
    validarkeypress(er, e);
  };

  function validarkeypress(er, e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key);
    a = er.test(tecla);
    if (!a) {
      e.preventDefault();
    }
  }

  document.getElementById("user").onkeyup = function () {
    r = validarkeyup(
      keyup_cedula,
      this,
      document.getElementById("spam1"),
      "El formato debe ser 00000000 o 99999999."
    );
  };

  document.getElementById("contrasena").onkeyup = function () {
    r = validarkeyup(
      keyup_clave,
      this,
      document.getElementById("spam2"),
      "El campo debe contener de 6 a 20 caracteres."
    );
  };

}
      
  function validarkeyup(er, etiqueta, etiquetamensaje, mensaje) {
    a = er.test(etiqueta.value);
    if (!a) {
      etiquetamensaje.innerText = mensaje;
      return 0;
    } else {
      etiquetamensaje.innerText = "";
      return 1;
    }
  }

 //Validaciones de entrada login

 $("#entrasystem").click(function (e) { 
    a = valida_entrada();
    if (a) {
      e.preventDefault();
    } else {
      var datos = new FormData();
      datos.append("accion", "ingresar");
      datos.append("cedula", $("#user").val());
      datos.append("clave", $("#contrasena").val());
      enviaAjax(datos);
    }
  });


  function valida_entrada() {
    var error = false;

    usuario = validarkeyup(
      keyup_cedula,
      document.getElementById("user"),
      document.getElementById("spam1"),
      "El formato debe ser 00000000 o 99999999."
    );
      if(document.getElementById("contrasena").value == ""){
        document.getElementById("spam2").innerText = "Complete el campo contraseña";
        clave = 0;
      }else{
        document.getElementById("spam2").innerText = "";
        clave = 1;
      }
    if (
      usuario == 0 ||
      clave == 0
    ) {
      //variable==0, indica que hubo error en la validacion de la etiqueta
      error = true;
    }
    return error;
  }

//Validaciones de registro login

/*   $("#RegistroUser").click(function (e) { 
    a = valida_registrar();
    if (a != "") {
      e.preventDefault();
    }else if($("#floatingInput6").val() != $("#floatingInput7").val()){
      $(campo6).html("Verifique su contraseña");
      e.preventDefault();
    }
    else {
      var datos = new FormData();
      datos.append("accion", "registrar");
      datos.append("nombreapellido", $("#floatingInput3").val());
      datos.append("email", $("#floatingInput4").val());
      datos.append("cedula", $("#floatingInput5").val());
      datos.append("clave", $("#floatingInput6").val());
      enviaAjax(datos);
    }
  }); */
  /* 
  function valida_registrar() {
        var error = false;
        nombre = validarkeyup(
          keyup_nombre,
          document.getElementById("floatingInput3"),
          document.getElementById("campo3"),
          "* Solo letras de 3 a 30 caracteres, siendo la primera en mayúscula."
        );
        correo = validarkeyup(
          keyup_correo,
          document.getElementById("floatingInput4"),
          document.getElementById("campo4"),
          "* El formato debe ser ejemplo@gmail.com"
        );
        usuario = validarkeyup(
          keyup_cedula,
          document.getElementById("floatingInput5"),
          document.getElementById("campo5"),
          "* El formato debe ser V-99999999 o J-99999999."
        );
        clave = validarkeyup(
          keyup_clave,
          document.getElementById("floatingInput6"),
          document.getElementById("campo6"),
          "* El campo debe contener de 6 a 20 caracteres."
        );
        clave1 = validarkeyup(
          keyup_clave,
          document.getElementById("floatingInput7"),
          document.getElementById("campo7"),
          "* El campo debe contener de 6 a 20 caracteres."
        );
        if (
          nombre == 0 ||
          correo == 0 ||
          usuario == 0 ||
          clave == 0 ||
          clave1 == 0
        ) {
          //variable==0, indica que hubo error en la validacion de la etiqueta
          error = true;
        }
        return error;
      }
 */
      function enviaAjax(datos) {
        var toastMixin = Swal.mixin({
          toast: true,
          position: "top-right",
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
        });
        $.ajax({
          url: "",
          type: "POST",
          contentType: false,
          data: datos,
          processData: false,
          cache: false,
          success: function (response) {
            var res = JSON.parse(response);
            //alert(res.title);
            if (res.estatus == 1) {
              toastMixin.fire({
                animation: true,
                title: res.title,
                text: res.message,
                icon: res.icon,
              });
              setTimeout(function () {
                window.location.href="?pagina=Principal";
              }, 2000);
            } else if(res.estatus == 2){
              toastMixin.fire({
                animation: true,
                title: res.title,
                text: res.message,
                icon: res.icon,
              });
              setTimeout(function () {
                window.location.href="?pagina=login";
              }, 2000);
            }else if(res.estatus == 3){
              toastMixin.fire({
                animation: true,
                text: res.message,
                title: res.title,
                icon: res.icon,
              });
            }
          },
          error: function (err) {
            Toast.fire({
              icon: res.error,
            });
          },
        });
      }
