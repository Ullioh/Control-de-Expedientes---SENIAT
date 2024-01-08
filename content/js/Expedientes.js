var keyup_nro_pro = /^([A-Za-z\d]{4,10}[-\/]?){0,6}[A-Za-z\d]{2,30}$/;
var keyup_nombre = /^(([A-ZÁÉÍÓÚ]+[a-zñáéíóú.,-]*[\s]?){2,30})$/;
var keyup_rif = /^([VEJPGvejpg]{1}-\d{8}-\d{1}|[VEJPGvejpg]{1}-\d{7}-\d{1}|[VEJPGvejpg]{1}-\d{9}|[VEJPGvejpg]{1}-\d{8})$/;
var keyup_domicilio_fiscal = /^[A-ZÁÉÍÓÚa-zñáéíóú0-9,.#%$^&*:\s]{2,200}$/;
var keyup_genero = /^[A-ZÁÉÍÓÚ][a-zñáéíóú]{7,8}$/;
var keyup_telefono = /^[0-9]{11}$/;
var keyup_correo =/^[A-Za-z0-9_\u00d1\u00f1\u00E0-\u00FC]{3,25}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,4}$/;
var keyup_direccion = /^[A-ZÁÉÍÓÚa-zñáéíóú0-9,.#%$^&*:\s]{2,100}$/;
/* function mostrarPassword() {
  var cambio = document.getElementById("clave");
  if (cambio.type == "password") {
    cambio.type = "text";
    $(".icon").removeClass("fa fa-eye-slash").addClass("fa fa-eye");
  } else {
    cambio.type = "password";
    $(".icon").removeClass("fa fa-eye").addClass("fa fa-eye-slash");
  }
} */


/* $(document).ready(function () {
  //CheckBox mostrar contraseña
  $("#ShowPassword").click(function () {
    $("#Password").attr("type", $(this).is(":checked") ? "text" : "password");
  });
}); */

 
  var table = $('#funcionpaginacion').DataTable({      
      language: {
              "lengthMenu": "Mostrar _MENU_ registros",
              "zeroRecords": "No se encontraron resultados",
              "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
              "infoFiltered": "(filtrado de un total de _MAX_ registros)",
              "sSearch": "Buscar:",
              "oPaginate": {
                  "sFirst": "Primero",
                  "sLast":"Último",
                  "sNext":"Siguiente",
                  "sPrevious": "Anterior"
         },
         "sProcessing":"Procesando...",
          },
      //para usar los botones   
      dom: "B<'row'<'col-sm-6'><'col-sm-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-5'il><'col-sm-7'p>>",
      colReorder: true,
      lengthMenu: [5, 10, 20, 30, 40, 50, 100],   
      buttons:[ 
    {
      extend:    'excelHtml5',
      filename: function() {
        return "EXCEL-Expedientes-Fiscalización"      
      },          
      title: function() {
        var searchString = table.search();        
        return searchString.length? "Search: " + searchString : "Reporte de Expedientes (Fiscalización)"
      },
      text:      '<i class="fas fa-file-excel text-success"></i> ',
      titleAttr: 'Exportar a Excel',
      className: 'btn border border-success bg-white mr-1',
      exportOptions: {
        columns: [0,1,2,3,4,5]
    }
    },
    {
      extend:    'pdfHtml5',
      filename: function() {
        return "PDF-Expedientes-Fiscalización"      
      },          
      title: function() {
        var searchString = table.search();        
        return searchString.length? "Search: " + searchString : "Reporte de Expedientes (Fiscalización)"
      },
      text:      '<i class="fas fa-file-pdf text-danger "></i> ',
      titleAttr: 'Exportar a PDF',
      className: 'btn border border-danger bg-white mr-1',
      customize: function ( doc ) {
        doc.pageMargins = [30, 60, 30,20 ];
        var cols = [];
        cols[0] = {        
        margin: [ 10, 0, 0, 2 ],
        alignment: 'start',
        image: 'data:image/png;base64,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',
        width: 150,
        height: 50};
        cols[1] = {text: ""};
        var objFooter = {};
        objFooter['columns'] = cols;
        doc['header']=objFooter;
        // Splice the image in after the header, but before the table
        },
      exportOptions: {
        columns:[0,1,2,3,4,5]
    }
  },
    {
      extend:    'print',
      filename: function() {
        return "Print-Expedientes-Fiscalización"      
      },          
      title: function() {
        var searchString = table.search();        
        return searchString.length? "Search: " + searchString : "Reporte de Expedientes (Fiscalización)"
      },
      text:      '<i class="fa fa-print text-info"></i> ',
      titleAttr: 'Imprimir',
      className: 'btn border border-info bg-white mr-1',
      exportOptions: {
        columns: [0,1,2,3,4,5]
    }
    },    
  ]  
  });     



document.onload = carga();
function carga() {
  /*--------------VALIDACION PARA NRO DE PROVIDENCIA--------------------*/
  document.getElementById("NroProvidencia").maxLength = 100;
  document.getElementById("NroProvidencia").onkeypress = function (e) {
    er = /^[a-zA-Z0-9-\/]*$/;
    validarkeypress(er, e);
  };
  document.getElementById("NroProvidencia").onkeyup = function () {
    r = validarkeyup(
      keyup_nro_pro,
      this,
      document.getElementById("sNroProvidencia"),
      "* El formato debe ser 9999-9999-9999-9999 o ABCDE1234/ABCDE1234/ABCDE1234/ABCDE1234 o ABCDE123456789"
    );
  };
  /*--------------FIN VALIDACION PARA NRO DE PROVIDENCIA--------------------*/

  /*--------------VALIDACION PARA SUJETO PASIVO--------------------*/
  document.getElementById("SuPa").maxLength = 30;
  document.getElementById("SuPa").onkeypress = function (e) {
    er = /^[A-Za-z\s\b\u00f1\u00d1\u00E0-\u00FC]*$/;
    validarkeypress(er, e);
  };
  document.getElementById("SuPa").onkeyup = function () {
    r = validarkeyup(
      keyup_nombre,
      this,
      document.getElementById("sSuPa"),
      "* Solo letras de 3 a 30 caracteres, siendo la primera en mayúscula."
    );
  };
  /*--------------FIN VALIDACION PARA SUJETO PASIVO--------------------*/

  
  /*--------------FIN VALIDACION PARA RIF FISCAL--------------------*/
  
    document.getElementById("yourRifC").maxLength = 11;
    document.getElementById("yourRifC").onkeypress = function (e) {
      er = /^[VEJPGvejpg0-9-]*$/;
      validarkeypress(er, e);
    };
    document.getElementById("yourRifC").onkeyup = function () {
      r = validarkeyup(
        keyup_rif,
        this,
        document.getElementById("syourRifC"),
        "* El formato debe contener ejemplo J-123456789."
      );
    };

    document.getElementById("SuPa").maxLength = 30;
    document.getElementById("SuPa").onkeypress = function (e) {
      er = /^[A-Za-z\s\b\u00f1\u00d1\u00E0-\u00FC]*$/;
      validarkeypress(er, e);
    };
    document.getElementById("SuPa").onkeyup = function () {
      r = validarkeyup(
        keyup_nombre,
        this,
        document.getElementById("sSuPa"),
        "* Solo letras de 3 a 30 caracteres, siendo la primera en mayúscula."
      );
    };

    document.getElementById("DomiFI").maxLength = 255;
    document.getElementById("DomiFI").onkeypress = function (e) {
      er = /^[A-Za-z0-9\s\b\u00f1\u00d1\u00E0-\u00FC]*$/;
      validarkeypress(er, e);
    };
    document.getElementById("DomiFI").onkeyup = function () {
      r = validarkeyup(
        keyup_domicilio_fiscal,
        this,
        document.getElementById("sDomiFI"),
        "* Solo letras de 2 a 255 caracteres."
      );
    };


    document.getElementById("AddFiscal").maxLength = 9;
    document.getElementById("AddFiscal").onkeypress = function (e) {
      er = /^[A-Za-z\b\u00f1\u00d1\u00E0-\u00FC]*$/;
      validarkeypress(er, e);
    };
    document.getElementById("AddFiscal").onchange = function () {
      r = validarselect(
        this,
        document.getElementById("sAddFiscal"),
        "* Seleccione un genero"
      );
    };

  /*--------------FIN VALIDACION PARA RIF FISCAL--------------------*/

  /*----------------------CRUD DEL MODULO------------------------*/
  document.getElementById("enviar").onclick = function () {
    a = valida_registrar();
    if (a != "") {
    }else {
      var datos = new FormData();
      datos.append("id_expedient_user", $("#id_expedient_user").val());
      datos.append("id_expediente", $("#id_expediente").val());
      datos.append("accion", $("#accion").val());
      datos.append("supervisor", $("#supervisor").val());
      datos.append("nro_providencia", $("#NroProvidencia").val());
      datos.append("sujeto_pasivo", $("#SuPa").val());
      datos.append("rif", $("#yourRifC").val());
      datos.append("domicilio_fiscal", $("#DomiFI").val());
      datos.append("fiscal_A", $("#AddFiscal").val());
      datos.append("id_area", $("#registro_id_area").val());
      enviaAjax(datos);
    }
  };

  document.getElementById("nuevo").onclick = function () {
    limpiar();
    $("#accion").val("registrar");
    $("#titulo").text("Registrar Expediente");
    $("#enviar").text("Registrar");
    $("#staticBackdrop").modal("show");
  };
}

document.getElementById("regis_select_division").onchange = function(){
  r = validarselect(
    this,
    document.getElementById("sregis_select_division"),
    "* Seleccione una división"
  );
  var datos = new FormData();
  datos.append("accion", "regis_buscar_area");
  datos.append("regis_id_division", document.getElementById("regis_select_division").value);
  regis_buscar_division_area(datos);
}

function cambiardivision() {
  var datos = new FormData();
  datos.append("accion", "buscar_area");
  datos.append("id_division", document.getElementById("select_division").value);
  buscar_division_area(datos);
}

function enviar_expediente(){
  a = valida_registrar1();
  if (a != "") {
  }else {
  var datos = new FormData();
  datos.append("accion", "update_area_expediente");
  datos.append("id_expediente", document.getElementById("expedi_status").value);
  datos.append("nro_expediente", document.getElementById("nro_expediente").value);
  datos.append("supervisor", document.getElementById("selecsuperv").value);
  datos.append("id_area", document.getElementById("id_area").value);
  enviaAjax(datos);
  }
}
/*--------------------FIN DE CRUD DEL MODULO----------------------*/

/*-------------------FUNCIONES DE HERRAMIENTAS-------------------*/
function validarkeypress(er, e) {
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key);
  a = er.test(tecla);
  if (!a) {
    e.preventDefault();
  }
}

function validarselect(etiqueta, etiquetamensaje, mensaje) {
  if(etiqueta.value == 0){
    etiquetamensaje.innerText = mensaje;
    etiquetamensaje.style.color = "red";
    etiqueta.classList.add("is-invalid");
  }else{
    etiquetamensaje.innerText = "";
    etiqueta.classList.remove("is-invalid");
    etiqueta.classList.add("is-valid");
  }
}

function validarkeyup(er, etiqueta, etiquetamensaje, mensaje) {
  a = er.test(etiqueta.value);
  if (!a) {
    etiquetamensaje.innerText = mensaje;
    etiquetamensaje.style.color = "red";
    etiqueta.classList.add("is-invalid");
    return 0;
  } else {
    etiquetamensaje.innerText = "";
    etiqueta.classList.remove("is-invalid");
    etiqueta.classList.add("is-valid");
    return 1;
  }
}



function buscar_status_expediente(id_expediente,nro_expediente) {
  document.getElementById("expedi_status").value = id_expediente;
  document.getElementById("nro_expediente").value = nro_expediente;
  var datos = new FormData();
  datos.append("accion", "buscar_status_expediente");
  datos.append("id_expediente", id_expediente);
  buscar_status_ajax(datos);
}



function cambiarEstado(boton) {
  // Obtener los botones
  // Desactivar el botón actual y activar el otro
      var datos = new FormData();
      datos.append("accion", "cambiar_estado");
      datos.append("id_expediente", document.getElementById("expedi_status").value);
  if (boton.id == 'btnRevision') {
    document.getElementById('btnRevision').disabled = true;
    document.getElementById('btnProceso').disabled = false;
      datos.append("estado", 1);
  } else if (boton.id == 'btnProceso') {
    document.getElementById('btnProceso').disabled = true;
    document.getElementById('btnRevision').disabled = false;
      datos.append("estado", 2);
  }
  enviaEstadoAjax(datos);
} 
 

function limpiar() {
  $("#NroProvidencia").val("");
  $("#SuPa").val("");
  $("#yourRifC").val("");
  $("#DomiFI").val("");
  $("#AddFiscal").val("");
  document.getElementById("sNroProvidencia").innerText = "";
  document.getElementById("sSuPa").innerText = "";
  document.getElementById("syourRifC").innerText = "";
  document.getElementById("sDomiFI").innerText = "";
  document.getElementById("sAddFiscal").innerText = "";
  document.getElementById("NroProvidencia").classList.remove("is-invalid", "is-valid");
  document.getElementById("SuPa").classList.remove("is-invalid", "is-valid");
  document.getElementById("yourRifC").classList.remove("is-invalid", "is-valid");
  document.getElementById("DomiFI").classList.remove("is-invalid", "is-valid");
  document.getElementById("AddFiscal").classList.remove("is-invalid", "is-valid");
}

function valida_registrar() {
  var error = false;

  nro_providencia = validarkeyup(
    keyup_nro_pro,
    document.getElementById("NroProvidencia"),
    document.getElementById("sNroProvidencia"),
    "* El formato debe ser 99999999."
  );

  rif = validarkeyup(
    keyup_rif,
    document.getElementById("yourRifC"),
    document.getElementById("syourRifC"),
    "* El formato debe contener ejemplo J-123456789."
  );


  sujeto_pasivo = validarkeyup(
    keyup_nombre,
    document.getElementById("SuPa"),
    document.getElementById("sSuPa"),
    "* Solo letras de 3 a 30 caracteres, siendo la primera en mayúscula."
  );
  
  domicilio_fisc = validarkeyup(
    keyup_domicilio_fiscal,
    document.getElementById("DomiFI"),
    document.getElementById("sDomiFI"),
    "* Solo letras de 2 a 255 caracteres."
  );

  if(document.getElementById("AddFiscal").value == 0){
    document.getElementById("sAddFiscal").innerHTML ="* Seleccione un genero";
    document.getElementById("sAddFiscal").style.color = "red";
    document.getElementById("AddFiscal").classList.add("is-invalid");
  }else{
    document.getElementById("sAddFiscal").innerHTML ="";
    document.getElementById("AddFiscal").classList.remove("is-invalid");
    document.getElementById("AddFiscal").classList.add("is-valid");
  }

  if(document.getElementById("regis_select_division").value == 0){
    document.getElementById("sregis_select_division").innerHTML ="* Seleccione un división";
    document.getElementById("sregis_select_division").style.color = "red";
    document.getElementById("regis_select_division").classList.add("is-invalid");
  }else{

    if(document.getElementById("registro_id_area").value == 0){
      document.getElementById("sregistro_id_area").innerHTML ="* Seleccione un área";
      document.getElementById("sregistro_id_area").style.color = "red";
      document.getElementById("registro_id_area").classList.add("is-invalid");
    }else{
      document.getElementById("sregistro_id_area").innerHTML ="";
      document.getElementById("registro_id_area").classList.remove("is-invalid");
      document.getElementById("registro_id_area").classList.add("is-valid");
    }
  
    document.getElementById("sregis_select_division").innerHTML ="";
    document.getElementById("regis_select_division").classList.remove("is-invalid");
    document.getElementById("regis_select_division").classList.add("is-valid");
  }

  if(
    nro_providencia == 0 ||
    sujeto_pasivo == 0 ||
    rif == 0 ||
    domicilio_fisc == 0 ||
    document.getElementById("AddFiscal").value == 0  ||
    document.getElementById("regis_select_division").value == 0 || 
    document.getElementById("registro_id_area").value == 0
  ){
    //variable==0, indica que hubo error en la validacion de la etiqueta
    error = true;
  }
  return error;
}

function valida_registrar1() {
  var error1 = false;
  if(document.getElementById("select_division").value == 0){
    document.getElementById("sselect_division").innerHTML ="* Seleccione un división";
    document.getElementById("sselect_division").style.color = "red";
    document.getElementById("select_division").classList.add("is-invalid");
  }else{

    if(document.getElementById("id_area").value == 0){
      document.getElementById("sid_area").innerHTML ="* Seleccione un área";
      document.getElementById("sid_area").style.color = "red";
      document.getElementById("id_area").classList.add("is-invalid");
    }else{
      document.getElementById("sid_area").innerHTML ="";
      document.getElementById("id_area").classList.remove("is-invalid");
      document.getElementById("id_area").classList.add("is-valid");
    }

    if(document.getElementById("selecsuperv").value == 0){
      document.getElementById("sselecsuperv").innerHTML ="* Seleccione un supervisor";
      document.getElementById("sselecsuperv").style.color = "red";
      document.getElementById("selecsuperv").classList.add("is-invalid");
    }else{
      document.getElementById("sselecsuperv").innerHTML ="";
      document.getElementById("selecsuperv").classList.remove("is-invalid");
      document.getElementById("selecsuperv").classList.add("is-valid");
    }
  
    document.getElementById("sselect_division").innerHTML ="";
    document.getElementById("select_division").classList.remove("is-invalid");
    document.getElementById("select_division").classList.add("is-valid");
  }
  if(
    document.getElementById("select_division").value == 0 || 
    document.getElementById("id_area").value == 0 || 
    document.getElementById("selecsuperv").value == 0 
  ){
    //variable==0, indica que hubo error en la validacion de la etiqueta
    error1 = true;
  }
  return error1;
}

function cargar_datos(id_expediente,id_usuario) {
  var datos = new FormData();
  datos.append("accion", "editar");
  datos.append("id_expediente", id_expediente);
  datos.append("id_usuario", id_usuario);
  mostrar(datos);
}
/*-------------------FIN DE FUNCIONES DE HERRAMIENTAS-------------------*/

/*--------------------FUNCIONES CON AJAX----------------------*/

function cambiar_area(){
  Swal.fire({
    title: "¿Está seguro de realizar cambios?",
    text: "¡El registro se cambiara de área!",
    icon: "warning",
    showCloseButton: true,
    showCancelButton: true,
    confirmButtonColor: "#0C72C4",
    cancelButtonColor: "#9D2323",
    confirmButtonText: "Confirmar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      setTimeout(function () {
        var datos = new FormData();
        datos.append("accion", "cambiar_area_expediente");
        datos.append("nro_expediente", $("#nro_expediente").val());
        datos.append("area_expediente", $("#select_Area").val());
        enviaAjax(datos);
      }, 10);
    }
  });
}

function eliminar(id_expediente, id_usuario) {
  Swal.fire({
    title: "¿Está seguro de eliminar el registro?",
    text: "¡No podrás revertir esto!",
    icon: "warning",
    showCloseButton: true,
    showCancelButton: true,
    confirmButtonColor: "#0C72C4",
    cancelButtonColor: "#9D2323",
    confirmButtonText: "Confirmar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      setTimeout(function () {
        var datos = new FormData();
        datos.append("accion", "eliminar");
        datos.append("id_expediente", id_expediente);
        datos.append("id_usuario", id_usuario);
        enviaAjax(datos);
      }, 10);
    }
  });
}

function enviaAjax(datos) {
  var toastMixin = Swal.mixin({
    showConfirmButton: false,
    width: 450,
    padding: '3.5em',
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
    success: (response) => {
      var res = JSON.parse(response);
      //alert(res.title);
      if (res.estatus == 1) {
        toastMixin.fire({

          title: res.title,
          text: res.message,
          icon: res.icon,
        });

        limpiar();
        setTimeout(function () {
          window.location.reload();
        }, 3000);
      } else {
        toastMixin.fire({

          text: res.message,
          title: res.title,
          icon: res.icon,
        });
      }
    },
    error: (err) => {
      Toast.fire({
        icon: res.error,
      });
    },
  });
}

function enviadatosAjax(datos) {
  var toastMixin = Swal.mixin({
    toast: true,
    width: 300,
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
    success: (response) => {
      var res = JSON.parse(response);
      //alert(res.title);
      if (res.estatus == 1) {
        toastMixin.fire({

          title: res.title,
          text: res.message,
          icon: res.icon,
        });
      } else {
        toastMixin.fire({

          text: res.message,
          title: res.title,
          icon: res.icon,
        });
      }
    },
    error: (err) => {
      Toast.fire({
        icon: res.error,
      });
    },
  });
}

function enviaEstadoAjax(datos) {
  var toastMixin = Swal.mixin({
    toast: true,
    width: 300,
    position: "top-right",
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true,
  });
  $.ajax({
    url: "",
    type: "POST",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: (response) => {
      var res = JSON.parse(response);
      //alert(res.title);
      if (res.estatus == 1) {
        toastMixin.fire({
          title: res.title,
          text: res.message,
          icon: res.icon,
        });
        setTimeout(function () {
          window.location.reload();
        }, 1500);
      } else {
        toastMixin.fire({

          text: res.message,
          title: res.title,
          icon: res.icon,
        });
      }
    },
    error: (err) => {
      Toast.fire({
        icon: res.error,
      });
    },
  });
}

function buscar_status_ajax(datos) {
  $.ajax({
    url: "",
    type: "POST",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: (response) => {
      var res = JSON.parse(response);
      if (res.id_estado_expedientes == 1) {
        document.getElementById('btnRevision').disabled = true;
        document.getElementById('btnProceso').disabled = false;
      } else if (res.id_estado_expedientes == 2) {
        document.getElementById('btnProceso').disabled = true;
        document.getElementById('btnRevision').disabled = false;
    }
    },
    error: (err) => {
      Toast.fire({
        icon: res.error,
      });
    },
  });
}


function regis_buscar_division_area(datos) {
  $.ajax({
    url: "",
    type: "POST",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: (response) => {
      document.getElementById("regis_seleccionar_area").innerHTML = response;
    },
    error: (err) => {
      Toast.fire({
        icon: res.error,
      });
    },
  });
}


function buscar_division_area(datos) {
  $.ajax({
    url: "",
    type: "POST",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: (response) => {
      document.getElementById("seleccionar_area").innerHTML = response;
    },
    error: (err) => {
      Toast.fire({
        icon: res.error,
      });
    },
  });
}


function mostrar(datos) {
  $.ajax({
    async: true,
    url: "",
    type: "POST",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: (response) => {
     var res = JSON.parse(response);
      limpiar();
      $("#id_expedient_user").val(res.id_expedient_user);
      $("#id_expediente").val(res.id_expediente);
      $("#NroProvidencia").val(res.nro_providencia);
      $("#SuPa").val(res.sujeto_pasivo);
      $("#yourRifC").val(res.rif);
      $("#DomiFI").val(res.domicilio_fiscal);
      $("#AddFiscal").val(res.id_usuario);
      $("#enviar").text("Modificar");
      $("#staticBackdrop").modal("show");
      $("#accion").val("modificar");
      document.getElementById("accion").innerText = "modificar";
      $("#titulo").text("Modificar Expediente");
    },
    error: (err) => {
      Toast.fire({
        icon: error.icon,
      });
    },
  });
}




/*--------------------FIN DE FUNCIONES CON AJAX----------------------*/
