

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
                    <a class="btn btn-outline-warning  btn-sm" data-toggle="modal" data-target="#exampleModal" data-idempresa="<?php echo $row['idcliente']?>"> Modificar</a>
                    <a class="btn btn-outline-danger eli  btn-sm" href="#"> Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>



        </tbody>

    </table>
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
      <form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombre">Nombre Completo</label>
      <input type="text" class="form-control" id="nombre" placeholder="nombre completo">
    </div>
  </div>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" id="direccion" placeholder="calle # entre ">
  </div>
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" id="telefono" placeholder="telefono fijo">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cable">Nro Contrato Cable</label>
      <input type="text" class="form-control" id="cable" placeholder='nro de contrato'>
    </div>
    <div class="form-group col-md-6">
      <label for="cfono">Contrato Telefonico</label>
      <input type="text" class="form-control" id="cfono" placeholder='nro de contrato'>
    </div>
    
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-3">
     <label for="nodo">Nodo</label>
      <input type="text" class="form-control" id="nodo">
    </div>
    
    <div class="form-group col-md-3">
     <label for="manzano">Manzano</label>
      <input type="text" class="form-control" id="manzano">
    </div>
    
    <div class="form-group col-md-3">
     <label for="tap">Tap</label>
      <input type="text" class="form-control" id="tap">
    </div>
    
    <div class="form-group col-md-3">
     <label for="boca">Boca</label>
      <input type="text" class="form-control" id="boca">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
     <label for="plan">Plan</label>
      <input type="text" class="form-control" id="plan">
    </div>
    
    <div class="form-group col-md-3">
     <label for="sp">SP</label>
      <input type="text" class="form-control" id="sp">
    </div>
    
    <div class="form-group col-md-3">
     <label for="zona">Zona</label>
      <input type="text" class="form-control" id="zona">
    </div>
    
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="Edificio">Edificio</label>
      <input type="text" class="form-control" id="Edificio">
    </div>
    
    <div class="form-group col-md-6">
     <label for="departamento">Departamento</label>
      <input type="text" class="form-control" id="departamento">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
     <label for="observacion">Observacion</label>
      <input type="text" class="form-control" id="observacion">
    </div>
    
  </div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
 
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );</script>