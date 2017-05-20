<?php 
	include_once('views/header.php');
	include_once('views/menu.php');
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
  	<div class="row" id="form-pendaftaran-semas-sarjana">
	  <div class="col-md-12 col-sm-12 col-xs-12">
	      <div class="x_panel">
	        <div class="x_title">
	          <h2>Form Pendaftaran Semas Sarjana</h2>
	          <div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	          <br />
	          <form role="form" action="index.php?controller=semas&save_pendaftaran_semas_sarjana" method="POST" data-parsley-validate class="form-horizontal form-label-left">


	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asal Sekolah <span class="required">*</span>
	              </label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <input name="asal_sekolah" type="text" id="asal_sekolah" required="required" class="form-control col-md-7 col-xs-12">
	              </div>
	            </div>

	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Sma</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <select name="jenis_sma" class="form-control">
	                  <option value="IPA">IPA</option>
	                  <option value="IPS">IPS</option>
	                  <option value="Bahasa">Bahasa</option>
	                </select>
	              </div>
	            </div>

	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Sekolah <span class="required">*</span>
	              </label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <input name="alamat_sekolah" type="text" id="alamat_sekolah" required="required" class="form-control col-md-7 col-xs-12">
	              </div>
	            </div>

	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NISN <span class="required">*</span>
	              </label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <input name="nisn" type="number" id="nisn" minlength="10" maxlength="10" required="required" class="form-control col-md-7 col-xs-12">
	              </div>
	            </div>

	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lulus <span class="required">*</span>
	              </label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <input name="tgl_lulus" id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
	              </div>
	            </div>

	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nilai UAN <span class="required">*</span>
	              </label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <input name="nilai_uan" type="number" id="nilai_uan" required="required" class="form-control col-md-7 col-xs-12">
	              </div>
	            </div>

	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12">Prodi Pilihan 1</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <select name="prodi1" class="select2_single form-control" tabindex="-1">
	                  <?php
	                  foreach ($program_studi as $row) {
	                  ?>
	                  	<option value="<?php echo $row['kode'];?>"><?php echo $row['nama'];?></option>
	                  <?php } ?>
	                </select>
	              </div>
	            </div>

	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12">Prodi Pilihan 2</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <select name="prodi2" class="select2_single form-control" tabindex="-1">
	                	<option value="">Pilihan 2</option>
	                  <?php
	                  foreach ($program_studi as $row) {
	                  ?>
	                  	<option value="<?php echo $row['kode'];?>"><?php echo $row['nama'];?></option>
	                  <?php } ?>
	                </select>
	                </select>
	              </div>
	            </div>

	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12">Prodi Pilihan 3</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <select name="prodi3" class="select2_single form-control" tabindex="-1">
	                	<option value="">Pilihan 3</option>
	                  <?php
	                  foreach ($program_studi as $row) {
	                  ?>
	                  	<option value="<?php echo $row['kode'];?>"><?php echo $row['nama'];?></option>
	                  <?php } ?>
	                </select>
	                </select>
	              </div>
	            </div>

	            <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi Kota Ujian</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <select name="lokasi_kota" id="lokasi_kota" class="form-control" tabindex="-1">
	                  <?php
	                  foreach ($lokasi_ujian as $row) {
	                  ?>
	                  	<option value="<?php echo $row['kota'];?>"><?php echo $row['kota'];?></option>
	                  <?php } ?>
	                </select>
	              </div>
	            </div>

	            <div class="form-group" id="lokasi-tempat-ujian">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi Tempat Ujian</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <select class="form-control" tabindex="-1">
	                  <option>Pilih Lokasi Kota Ujian Terlebih Dahulu</option>
	                </select>
	              </div>
	            </div>

	            <div class="ln_solid"></div>
	            <div class="form-group">
	              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	                <button class="btn btn-primary" type="submit">Simpan</button>
	              </div>
	            </div>

	          </form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
  </div>
</div>
<!-- /page content -->
<?php 
	include_once('views/footer.php');
?>