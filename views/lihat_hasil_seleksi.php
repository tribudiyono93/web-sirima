<?php 
	include_once('views/header.php');
	include_once('views/menu.php');
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">

            <div class="x_title">
            <h2>Form Lihat Hasil Seleksi</h2>
            <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />
                <form data-parsley-validate class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Pendaftaran</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="id-pendaftaran" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group" style="text-align: center;">
                    <button id="hasil-seleksi-btn" type="button" class="btn btn-primary">Lihat</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->

<div id="lihat-hasil-seleksi"></div>
<div id="lihat-hasil-seleksi-container" class="pop-up-container-wrapper zoom-anim-dialog mfp-hide">
    <div class="pop-up-wrapper">
        <div class="pop-up-container">
            <div class="pop-up-content">
              <h2>Kartu Ujian</h2>
              <div class="detail-container">
                <table class="table table-striped jambo_table bulk_action table-left-allign">
                  <tr>
                    <td>Id Pendaftaran</td>
                    <td>: 1234</td>
                  </tr>
                  <tr>
                    <td>Nama Lengkap</td>
                    <td>: Tania Putri</td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>: LULUS</td>
                  </tr>
                  <tr>
                    <td>Prodi</td>
                    <td>: S1 Ilmu Komputer Reguler</td>
                  </tr>
                  <tr>
                    <td>NPM</td>
                    <td>: 1507345625</td>
                  </tr>
                </table>
                <button id="hasil-seleksi-btn" type="button" class="btn btn-primary magnifipoup-close-btn">Kembali</button>
              </div>
            </div>            
        </div>
    </div>
</div>

<?php 
	include_once('views/footer.php');
?>

<script>
      $(document).ready(function(){
        $('.magnifipoup-close-btn').click(function(){
            $.magnificPopup.close();
        });

        $('#hasil-seleksi-btn').click(function(){
          $('#lihat-hasil-seleksi').click();
          event.preventDefault();
        });

        $('#lihat-hasil-seleksi').magnificPopup({
        items: {src: '#lihat-hasil-seleksi-container'},
              callbacks: {
                open: function () {}
            },
          type: 'inline', fixedContentPos: false, fixedBgPos: true, overflowY: 'auto', closeBtnInside: true, preloader: true, midClick: true, removalDelay: 300, mainClass: 'my-mfp-slide-bottom'
        });
      });
    </script>