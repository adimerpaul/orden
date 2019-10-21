

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lista de Ordenes de Trabajo</h1>
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
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($trabajo as $row): ?>
        <tr>
            <td><?php echo $row['razon']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['tipo']; ?></td>
            <td>
                    <a class="btn btn-outline-warning  btn-sm" data-toggle="modal" data-target="#materialModal" data-idtrabajo="<?php echo $row['idtrabajo']?>"> RegMaterial</a>
                    <a class="btn btn-outline-warning  btn-sm" data-toggle="modal" data-target="#listaModal" data-idtrabajo="<?php echo $row['idtrabajo']?>"> ListMaterial</a>
                    <a class="btn btn-outline-danger eli  btn-sm" href="<?=base_url()?>Orden/deleteorden/<?=$row['idtrabajo']?>"> Eliminar</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Registrar Orden de Trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?php echo base_url();?>Orden/store">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="idcliente">Cliente </label>
      <select name="idcliente" required class="form-control">
                                <option value="">Seleccionar..</option>
                                <?php
                                $query=$this->db->query("SELECT * FROM cliente");
                                foreach ($query->result() as $row){
                                    echo "<option value='".$row->idCliente."'> $row->razon </option>";
                                }
                                ?>
                            </select>
    </div>
  </div>
  <div class="form-group">
    <label for="idtecnico">Tecnico</label>
    <select name="idtecnico" required class="form-control">
                                <option value="">Seleccionar..</option>
                                <?php
                                $query=$this->db->query("SELECT * FROM tecnico");
                                foreach ($query->result() as $row){
                                    echo "<option value='".$row->idTecnico."'> $row->nombre</option>";
                                }
                                ?>
                            </select>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="tipo">Tipo de Servicio</label>
      <select name="tipo" required class="form-control">
        <option value="Instalacion">Instalacion</option>
        <option value="Reparacion">Reparacion</option>
        <option value="Corte">Corte</option>
      </select>
    </div>
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
<div class="modal fade" id="materialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?php echo base_url();?>Orden/material">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="codigo1">Codigo</label>
      <input type="text" class="form-control" id="codigo1" name="codigo1" required>
      <input type="hidden"  id="idtrabajo1"  name="idtrabajo1" required>
    </div>
  </div>
  <div class="form-group">
    <label for="nombre1">Nombre</label>
    <input type="text" class="form-control" id="nombre1" name="nombre1" required>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-3">
     <label for="cantidad1">Cantidad</label>
      <input type="text" class="form-control" id="cantidad1" name="cantidad1" required>
    </div>
    
    <div class="form-group col-md-3">
     <label for="costo1">Costo</label>
      <input type="text" class="form-control" id="costo1" name="costo1" required >
    </div>
    
    <div class="form-group col-md-3">
     <label for="unidad1">Unidad</label>
      <input type="text" class="form-control" id="unidad1" name="unidad1" required>
    </div>
    
  </div>
    
  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Registrar</button>
      </div>
</form>
      </div>

    </div>
  </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="listaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista Material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

             <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Costo</th>
                <th>Unidad</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody id="tmaterial">
        </tbody>

     </table>
    
  </div>
    
  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
      </div>

    </div>
  </div>
</div>