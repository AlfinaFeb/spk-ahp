<footer class="text-center">&copy; Alfina Febrianti -
  <h5>&copy; Alfina Febrianti -
    <?php
    date_default_timezone_set('Asia/Jakarta');
    echo "Tanggal hari ini: " . date('Y-m-d') . " - " . "Jam: " . date('H:i');
    ?>
  </h5>
</footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function () {

    $('#tabeldata').DataTable();

  });
</script>
</body>

</html>