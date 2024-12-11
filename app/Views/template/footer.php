<footer class="main-footer">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <!-- Left side: Copyright Information -->
      <div class="col-md-6 text-muted">
        <strong>&copy; 2024 <a href="https://adminlte.io" target="_blank" class="footer-link">SPK SALES TERBAIK PD ANUGRAH ABADI BARU</a></strong>
      </div>

      <!-- Right side: Signature -->
      <div class="col-md-6 text-md-right text-muted">
        <span>Developed by <strong>Faris</strong> - @220605110115</span>
      </div>
    </div>
  </div>
</footer>

<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<base href="<?= base_url("/assets") ?>/">
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<style>
  /* Footer Styles */
  .main-footer {
    background-color: #2c3e50; /* Darker background for a modern look */
    color: #ecf0f1; /* Light text color for contrast */
    padding: 20px 0;
    font-size: 0.9rem;
  }
  .main-footer a.footer-link {
    color: #18bc9c; /* Custom color for footer links */
    text-decoration: none;
    transition: color 0.3s;
  }
  .main-footer a.footer-link:hover {
    color: #1abc9c; /* Slightly lighter on hover */
  }
  .main-footer .container .row .text-md-right {
    font-size: 0.85rem;
  }
</style>
</body>
</html>
