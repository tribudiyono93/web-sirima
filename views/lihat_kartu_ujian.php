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
	            	<h2>Form Lihat Kartu Ujian</h2>
	            	<div class="clearfix"></div>
	            </div>
	            <div class="x_content">
	            <br />
	                <form id="demo-form2-bypass" data-parsley-validate class="form-horizontal form-label-left">

	                  	<div class="form-group">
	                    	<label class="control-label col-md-3 col-sm-3 col-xs-12">Id Pendaftaran</label>
	                    	<div class="col-md-6 col-sm-6 col-xs-12">
	                      		<input type="text" id="id_pendaftaran" class="form-control col-md-7 col-xs-12">
	                    	</div>
	                  	</div>
	                  	<div class="form-group" style="text-align: center;">
	                    	<button type="button" id="lihat-kartu-ujian-btn" class="btn btn-primary">Lihat</button>
	                  	</div>
	                </form>
	            </div>
          	</div>
        </div>
    </div>
</div>
<!-- /page content -->

<div id="lihat-kartu-ujian-popup-place"></div>
<div id="lihat-kartu-ujian-container" class="pop-up-container-wrapper zoom-anim-dialog mfp-hide">
    <div class="pop-up-wrapper">
        <div class="pop-up-container">
            <div class="pop-up-content">
              <h2>Kartu Ujian</h2>
              <div class="detail-container" id="detail-container">
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
                    <td>Nomor Kartu Ujian</td>
                    <td>: 1234343565</td>
                  </td>
                  <tr>
                    <td>Lokasi Ujian</td>
                    <td>:  Kampus ABC, Depok</td>
                  </td>
                  <tr>
                    <td>Waktu ujian</td>
                    <td>: 3 Juni 2017 08.00 WIB – 3 Juni 2017 10.00 WIB</td>
                  </td>
                </table>
                <button id="magnifi-close-btn" type="button" class="btn btn-primary magnifipoup-close-btn">Kembali</button>
              </div>
            </div>            
        </div>
    </div>
</div>

<?php 
  include_once('views/footer.php');
?>