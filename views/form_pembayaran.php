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
              <h2>Form Pembayaran</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form role="form" action="index.php?controller=semas&save_pembayaran_pendaftaran_semas_sarjana" method="POST" data-parsley-validate class="form-horizontal form-label-left">


                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Id Pendaftaran <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" readonly="true" name="id_pendaftaran" value="<?php echo $id;?>" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Biaya Pendaftaran <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" readonly="true" name="jumlah_bayar" value="500000" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button class="btn btn-primary" type="submit">Bayar</button>
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