<footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0-b1
        </div>
        <strong>Copyright &copy; 2019<a href="#">Orden de Trabajo</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>plugins/datatables/jquery.dataTables.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<?=$js?>
<script src="<?=base_url()?>dist/js/demo.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>
</html>
