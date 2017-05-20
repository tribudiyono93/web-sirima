
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
              <h2>Pendaftaran Sukses</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">

                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      Selamat pembayaran berhasil dilakukan
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Id Pendaftaran <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" readonly="true" value="<?php echo $id_pendaftaran;?>" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Id Pembayaran <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" readonly="true" value="<?php echo $id_pembayaran;?>" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Kartu Ujian <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" readonly="true" value="<?php echo $nomor_kartu_ujian;?>" class="form-control col-md-7 col-xs-12">
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