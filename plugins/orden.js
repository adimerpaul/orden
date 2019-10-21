$('#materialModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var idtrabajo = button.data('idtrabajo') // Extract info from data-* attributes
    console.log('idtrabajo');      
    $('#idtrabajo1').prop('value',button.data('idtrabajo') );
  })

  $('#listaModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var idtrabajo = button.data('idtrabajo') // Extract info from data-* attributes
    
    var cadena='';
    var parametros = {
                      "idtrabajo" : idtrabajo
              };
              $.ajax({
                      data:  parametros,
                      url:   'Orden/datomaterial',
                      type:  'post',
                      beforeSend: function () {
                              //$("#resultado").html("Procesando, espere por favor...");
                      },
                      success:  function (response) {
                          console.log(response);
                          var datos=JSON.parse(response);
                          var burl='<?=base_url()?>';
                          $('#tmaterial').html('');						
                          
                          datos.forEach(row => {
                            cadena=cadena+'<tr><td>'+ row.codigo+'</td>';
                            cadena+='<td>'+row.nombre+'</td>';
                            cadena+='<td>'+row.cantidad+'</td>';
                            cadena+='<td>'+row.costo+'</td>';
                            cadena+='<td>'+row.unidad+'</td>';
                            cadena+='<td>';
                            cadena+="<a class='btn btn-outline-danger  btn-sm' href='Orden/deletematerial/"+row.idmateriales+"'> Eliminar</a>";
                            cadena+='</td></tr>';            
                            
                        });
                        console.log(cadena);
                        $('#tmaterial').html(cadena);						
  
                      }
              });
      
  })