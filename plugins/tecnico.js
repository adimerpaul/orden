$('#modificaModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var idtecnico = button.data('idtecnico') // Extract info from data-* attributes
    var parametros = {
                      "idtecnico" : idtecnico
              };
              $.ajax({
                      data:  parametros,
                      url:   'Tecnico/datotecnico',
                      type:  'post',
                      beforeSend: function () {
                              //$("#resultado").html("Procesando, espere por favor...");
                      },
                      success:  function (response) {
                          console.log(response);
                          var datos=JSON.parse(response);
                          $('#idtecnico1').prop('value',datos.idtecnico);
                          $('#nombre1').prop('value',datos.nombre);
                          $('#codigo1').prop('value',datos.codigo);
                          $('#user1').prop('value',datos.user);
                          $('#clave1').prop('value',datos.clave);
                          $('#tipo1').prop('value',datos.tipo);
                      }
              });
      
  })