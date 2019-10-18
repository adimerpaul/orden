$('#modificaModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var idcliente = button.data('idcliente') // Extract info from data-* attributes
    var parametros = {
                      "idcliente" : idcliente
              };
              $.ajax({
                      data:  parametros,
                      url:   'Cliente/datocliente',
                      type:  'post',
                      beforeSend: function () {
                              //$("#resultado").html("Procesando, espere por favor...");
                      },
                      success:  function (response) {
                          console.log(response);
                          var datos=JSON.parse(response);
                          $('#idcliente1').prop('value',datos.idcliente);
                          $('#telefono1').prop('value',datos.telefono);
                          $('#nombre1').prop('value',datos.razon);
                          $('#direccion1').prop('value',datos.direccion);
                          $('#cable1').prop('value',datos.cable);
                          $('#cfono1').prop('value',datos.telefonico);
                          $('#nodo1').prop('value',datos.nodo);
                          $('#manzano1').prop('value',datos.manzano);
                          $('#tap1').prop('value',datos.tap);
                          $('#boca1').prop('value',datos.boca);
                          $('#sp1').prop('value',datos.sp);
                          $('#plan1').prop('value',datos.plan);
                          $('#zona1').prop('value',datos.zona);
                          $('#edificio1').prop('value',datos.edificio);
                          $('#departamento1').prop('value',datos.departamento);
                          $('#fechaprog1').prop('value',datos.fechaprogramada);
                          $('#observacion1').prop('value',datos.observacion);
                      }
              });
      
  })