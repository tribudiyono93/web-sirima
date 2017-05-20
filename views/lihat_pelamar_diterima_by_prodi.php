<?php
  include_once('header.php');
  include_once('menu.php');
?>
<script src="vendors/jquery/dist/jquery.min.js"></script>


<!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

<script>
  $(document).ready(function() {
      $('#rekap-pendaftaran-2').DataTable();
    });
</script>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Pemilihan Jenjang</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="form-rekap-pendaftaran" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Periode</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="periode" id="pemilihan-periode-rekap-pendaftaran">
                            <option disabled selected value>Pilih Periode</option>
                            <?php
                              foreach ($periode_penerimaan as $row) { ?>
                                  <option><?=$row['tahun']?></option>
                              <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prodi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="prodi" id="pemilihan-prodi-rekap-pendaftaran">
                            <option disabled selected value>Pilih Prodi</option>
                            <?php
                              foreach ($prodi as $row) { ?>
                                  <option value="<?=$row['kode']?>"><?=$row['jenjang']."-".$row['nama']?></option>
                              <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" style="text-align: center;">
                          <button type="button" class="btn btn-primary lihat-rekap">Lihat Rekap</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>

<body class="dt-example">
<table id="rekap-pendaftaran-2" class="display" cellspacing="0" width="100%">
  <div id="head-table-rekap"></div>
  <thead>
    <tr>
      <th>Id Pendaftaran </th>
      <th>Nama Lengkap </th>
      <th>Alamat </th>
      <th>Jenis Kelamin </th>
      <th>Tanggal Lahir </th>
      <th>NO KTP </th>
      <th>EMAIL </th>
    </tr>
  </thead>

  <tfoot>
    <tr>
      <th>Id Pendaftaran </th>
      <th>Nama Lengkap </th>
      <th>Alamat </th>
      <th>Jenis Kelamin </th>
      <th>Tanggal Lahir </th>
      <th>NO KTP </th>
      <th>EMAIL </th>
    </tr>
  </tfoot>

  <tbody id="body-tables">
  </tbody>
</table>
</body>
</div>
</div>
</div>
</div>
   <!-- /Starrr -->
  </body>
</html>

<?php
  include_once('footer.php');
?>

<script>
      $(document).ready(function(){
        $("#rekap-pendaftaran-2_wrapper").hide();

        $('.lihat-rekap').click(function(){
          $.ajax({
            method: "POST",
            data: $('#form-rekap-pendaftaran').serialize(),
            success: function(msg){
                if(msg.result == 1){
                  $('#head-table-rekap').html("");
                  $('#head-table-rekap').append("<h4>Prodi "+$('#pemilihan-prodi-rekap-pendaftaran').find(":selected").text()+"</h4>");
                  $('#body-tables').html("");
                  $('#body-tables').html(msg.rekap);
                  $("#rekap-pendaftaran-2_wrapper").show();
                }
                else if(msg.result == 0){
                  
                }
              },
              error: function(msg){
                $('#head-table-rekap').html("");
                  $('#body-tables').html("");
                  $("#rekap-pendaftaran-2_wrapper").hide();
              }
            
          });          
          event.preventDefault();
        });
      });
    </script>
