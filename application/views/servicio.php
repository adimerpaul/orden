<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blank Page</h1>
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
    <style>
        th { font-size: 12px; }
        td { font-size: 11px; }
    </style>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Completar Trabajos</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Observacion</th>
                        <th>Estado</th>
                        <th>Tipo</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query=$this->db->query("SELECT * FROM trabajo");
                    foreach ($query->result() as $row){
                        echo "<tr>
                                <td>$row->fecha</td>
                                <td>$row->observacion</td>
                                <td>$row->estado</td>
                                <td>$row->tipo</td>
                                <td>
                                    <button type='button' class='btn btn-primary p-0' data-toggle='modal' data-target='#exampleModal' data-id='$row->idtrabajo'>Actualizar</button>
                                </td>
                            </tr>";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Servicos del dia de hoy
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=base_url()?>Servicio/imprimir" id="form">
                    <div class="form-group row">
                        <label for="firma" class="col-sm-2 col-form-label">Firma</label>
                        <div class="col-sm-10">
                            <canvas style="border: 1px solid black"></canvas>
                            <br>
                            <input type="text" name="firma" id="firma" hidden>
                            <input type="text" name="idtrabajo" id="idtrabajo" hidden>
                            <br>
                            <button type="button" id="limpiar" class="btn btn-info p-1"><i class="fa fa-clone"></i> Limpiar</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script !src="">
    window.onload=function (e) {

        var canvas = document.querySelector("canvas");

        var signaturePad = new SignaturePad(canvas);
        $('#limpiar').click(function (e) {
            signaturePad.clear();
            e.preventDefault();
        });



        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id');
            $('#idtrabajo').val(id);
        });
        $('#form').submit(function (e) {
            var image = canvas.toDataURL(); // data:image/png....
            $('#firma').val(image);
            // return false;
        });
        $("#example1").DataTable();
        e.preventDefault();
    }
</script>
 
