<?php 
	include_once('views/header.php');
	include_once('views/menu.php');
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Pemilihan Jenjang Pendaftaran</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form role="form" action="index.php?controller=semas&pendaftaran_semas_pilih_jenjang" method="POST" class="form-horizontal form-label-left">

              	<div class="form-group">
                	<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenjang</label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <select name="jenjang" class="form-control" id="pemilihan-jenjang-pendaftaran">
	                    <option>Pilih Jenjang</option>
	                    <option>S1</option>
	                  </select>
	                </div>
              	</div>

              	<div class="ln_solid"></div>
	           	<div class="form-group">
	              	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	                	<button class="btn btn-primary" type="submit">Pilih</button>
	              	</div>
	           	</div>


            </form>
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