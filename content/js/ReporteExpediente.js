document.getElementById("reporte_expediente").onclick = function(){
    var datos = new FormData();
    datos.append("accion", "generar_reporte_expediente");
    datos.append("nro_expediente", document.getElementById("nro_expediente").value);
    enviarAjax(datos);
}

function enviarAjax(datos) {

    $.ajax({
      url: "",
      type: "POST",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: (response) => {
      var datos  = JSON.parse(response); 

      var datosProcesados = [];
      datos.forEach(function (item) {
          // Convierte la cadena de fecha a un objeto de fecha de JavaScript
          var fecha = new Date(item.fecha);
  
          // Agrega un punto de datos para Highcharts
          datosProcesados.push({
              x: fecha, // Convierte la fecha a un timestamp
              y: 1, // Puedes ajustar esto según tus necesidades
              name: item.destino_expediendte,
              movimiento_de_expediante: item.movimiento_de_expediante,
              fecha: item.fecha_formateada
          });
      });

// Encuentra el índice del último punto en datosProcesados
var ultimoIndice = datosProcesados.length - 1;

// Configura el color del último punto en rojo
datosProcesados[ultimoIndice].color = 'red';

// Configura el gráfico de Highcharts
Highcharts.chart('chart-container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Ruta del Expediente'
    },
    xAxis: {
        title: {
            text: '' // Establece el texto del título del eje x a una cadena vacía
        },
        lineWidth: 0, // Establece el ancho de la línea del eje x a cero
        lineColor: 'transparent', // Establece el color de la línea del eje x a transparente
        labels: {
            enabled: false // Deshabilita las etiquetas del eje x
        },
        tickLength: 0 // Establece la longitud de las marcas del eje x a cero
    },
    yAxis: {
        title: {
            text: 'Ruta'
        }
    },
    series: [{
        name: 'Destino del Expediente',
        data: datosProcesados
    }],
    tooltip: {
        formatter: function () {
            return 'División: ' + this.point.name + '<br>Movimiento: ' + this.point.movimiento_de_expediante + '<br>Fecha: ' + this.point.fecha;
        }
    }
});


  

      },
      error: (err) => {
        alert("error");
      },
    });
  }