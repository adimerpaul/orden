

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lista de Personal</h1>
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
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($tecnico as $row): ?>
        <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['tipo']; ?></td>
            <td>
                    <a class="btn btn-outline-warning  btn-sm" data-toggle="modal" data-target="#modificaModal" data-idtecnico="<?php echo $row['idtecnico']?>"> Modificar</a>
                    <a class="btn btn-outline-danger eli  btn-sm" href="<?=base_url()?>Tecnico/deletetecnico/<?=$row['idtecnico']?>"> Eliminar</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Registrar Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?php echo base_url();?>Tecnico/store">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombre">Nombre Completo</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre completo" required>
    </div>
  </div>
  <div class="form-group">
    <label for="codigo">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="Tipo">Tipo</label>
    <select id="tipo" class="form-control" name="tipo">
        <option selected value="TECNICO">TECNICO</option>
        <option value="ADMIN">ADMIN</option>
      </select>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="user">User</label>
      <input type="text" class="form-control" id="user" name="user" required>
    </div>
    
    <div class="form-group col-md-6">
     <label for="clave">Clave</label>
      <input type="password" class="form-control" id="clave" name="clave" required>
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
      <form method="POST" action="<?php echo base_url();?>Tecnico/update">

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombre1">Nombre Completo</label>
      <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="nombre completo" required>
      <input type="hidden" id="idtecnico1" name="idtecnico1" required>
    </div>
  </div>
  <div class="form-group">
    <label for="codigo1">Codigo</label>
    <input type="text" class="form-control" id="codigo1" name="codigo1" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="tipo1">Tipo</label>
    <select id="tipo1" class="form-control" name="tipo1">
        <option selected value="TECNICO">TECNICO</option>
        <option value="ADMIN">ADMIN</option>
      </select>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="user1">User</label>
      <input type="text" class="form-control" id="user1" name="user1" required>
    </div>
    
    <div class="form-group col-md-6">
     <label for="clave1">Clave</label>
      <input type="password" class="form-control" id="clave1" name="clave1" required>
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
