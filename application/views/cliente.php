

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lista de Clientes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">NUEVO</button>
                </div>
                <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre/Razon</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($cliente as $row): ?>
        <tr>
            <td><?php echo $row['razon']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td>
                    <a class="btn btn-outline-warning  btn-sm" data-toggle="modal" data-target="#modificaModal" data-idcliente="<?php echo $row['idcliente']?>"> Modificar</a>
                    <a class="btn btn-outline-danger eli  btn-sm" href="<?=base_url()?>Cliente/deletecliente/<?=$row['idcliente']?>"> Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>



        </tbody>

    </table>
    <script>
                var eli=document.getElementsByClassName('eli');
                for(var i=0;i<eli.length;i++){
                    eli[i].addEventListener('click',function(e){
                        //alert('asd');
                        if(!confirm('seguro de eliminar')){
                            e.preventDefault();
                        }  
                    });
                }
        
        </script>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?php echo base_url();?>Cliente/store">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombre">Nombre Completo</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre completo" required>
    </div>
  </div>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="calle # entre " required>
  </div>
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono fijo" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cable">Nro Contrato Cable</label>
      <input type="text" class="form-control" id="cable"  name="cable" placeholder='nro de contrato' required>
    </div>
    <div class="form-group col-md-6">
      <label for="cfono">Contrato Telefonico</label>
      <input type="text" class="form-control" id="cfono" name="cfono" placeholder='nro de contrato' required>
    </div>
    
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-3">
     <label for="nodo">Nodo</label>
      <input type="text" class="form-control"  id="nodo" name="nodo" required>
    </div>
    
    <div class="form-group col-md-3">
     <label for="manzano">Manzano</label>
      <input type="text" class="form-control" id="manzano" name="manzano" required >
    </div>
    
    <div class="form-group col-md-3">
     <label for="tap">Tap</label>
      <input type="text" class="form-control" id="tap" name="tap" required>
    </div>
    
    <div class="form-group col-md-3">
     <label for="boca">Boca</label>
      <input type="text" class="form-control" id="boca" name="boca" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
     <label for="plan">Plan</label>
      <input type="text" class="form-control" id="plan" name="plan" required>
    </div>
    
    <div class="form-group col-md-3">
     <label for="sp">SP</label>
      <input type="text" class="form-control" id="sp" name="sp" required>
    </div>
    
    <div class="form-group col-md-3">
     <label for="zona">Zona</label>
      <input type="text" class="form-control" id="zona" name="zona" required>
    </div>
    <div class="form-group col-md-3">
     <label for="fechaprog">Fecha Prog.</label>
      <input type="date" class="form-control" id="fechaprog" name="fechaprog" required>
    </div>
    
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="edificio">Edificio</label>
      <input type="text" class="form-control" id="edificio" name="edificio" required>
    </div>
    
    <div class="form-group col-md-6">
     <label for="departamento">Departamento</label>
      <input type="text" class="form-control" id="departamento" name="departamento" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
     <label for="observacion">Observacion</label>
      <input type="text" class="form-control" id="observacion" name="observacion" required>
    </div>
    
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
</form>
      </div>

    </div>
  </div>
</div>
 
 <!-- Modal -->
<div class="modal fade" id="modificaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?php echo base_url();?>Cliente/update">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombre1">Nombre Completo</label>
      <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="nombre completo" required>
      <input type="hidden"  id="idcliente1"  name="idcliente1" required>
    </div>
  </div>
  <div class="form-group">
    <label for="direccion1">Direccion</label>
    <input type="text" class="form-control" id="direccion1" name="direccion1" placeholder="calle # entre " required>
  </div>
  <div class="form-group">
    <label for="telefono1">Telefono</label>
    <input type="text" class="form-control"  id="telefono1" name="telefono1" placeholder="telefono fijo" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cable1">Nro Contrato Cable</label>
      <input type="text" class="form-control" id="cable1" name="cable1" placeholder='nro de contrato' required>
    </div>
    <div class="form-group col-md-6">
      <label for="cfono1">Contrato Telefonico</label>
      <input type="text" class="form-control" id="cfono1" name="cfono1" placeholder='nro de contrato' required>
    </div>
    
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-3">
     <label for="nodo1">Nodo</label>
      <input type="text" class="form-control" id="nodo1" name="nodo1" required>
    </div>
    
    <div class="form-group col-md-3">
     <label for="manzano1">Manzano</label>
      <input type="text" class="form-control" id="manzano1" name="manzano1" required >
    </div>
    
    <div class="form-group col-md-3">
     <label for="tap1">Tap</label>
      <input type="text" class="form-control" id="tap1" name="tap1" required>
    </div>
    
    <div class="form-group col-md-3">
     <label for="boca1">Boca</label>
      <input type="text" class="form-control" id="boca1" name="boca1" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
     <label for="plan1">Plan</label>
      <input type="text" class="form-control" id="plan1" name="plan1" required>
    </div>
    
    <div class="form-group col-md-3">
     <label for="sp1">SP</label>
      <input type="text" class="form-control" id="sp1" name="sp1" required>
    </div>
    
    <div class="form-group col-md-3">
     <label for="zona1">Zona</label>
      <input type="text" class="form-control" id="zona1" name="zona1" required>
    </div>
    <div class="form-group col-md-3">
     <label for="fechaprog1">Fecha Prog.</label>
      <input type="date" class="form-control" id="fechaprog1" name="fechaprog1" required>
    </div>
    
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="edificio1">Edificio</label>
      <input type="text" class="form-control" id="edificio1" name="edificio1" required>
    </div>
    
    <div class="form-group col-md-6">
     <label for="departamento1">Departamento</label>
      <input type="text" class="form-control" id="departamento1" name="departamento1" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
     <label for="observacion1">Observacion</label>
      <input type="text" class="form-control" id="observacion1" name="observacion1" required>
    </div>
    
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Modificar</button>
      </div>
</form>
      </div>

    </div>
  </div>
</div>
