<?php 
include_once('views/header.php');
?>
        <!-- page content -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Pelamar</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />
                <form role="form" action="index.php?controller=register&register" method="POST" id="register_pelamar" data-parsley-validate class="form-horizontal form-label-left" onsubmit="return validasiPendaftaranPelamar()">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="username" type="text" id="username" required="required" class="form-control col-md-7 col-xs-12">
                      <span id="username_message" class="username_message"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="password" minlength="6" type="password" id="password" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ulangi Password <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="ulangi_password" minlength="6" type="password" id="ulangi_password" required="required" class="form-control col-md-7 col-xs-12">
                      <span id="ulangi_password_message" class="ulangi_password_message"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="nama_lengkap" type="text" id="nama_lengkap" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Identitas <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="no_ktp" type="text" id="no_ktp" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="N">-- pilih --</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="tanggal_lahir" id="tanggal_lahir" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea name="alamat" id="alamat" class="form-control" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Email <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="email" type="text" id="email" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ulangi Email <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="ulangi_email" id="ulangi_email" type="text" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button class="btn btn-primary" type="submit">Daftar</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <!-- bootstrap-daterangepicker -->

    <script>
      function is_username_exist(username) {
        var xhttp = new XMLHttpRequest();
        var exist = false;
        var params = "username=" + username + "&check_username=check_username"; 
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("demo").innerHTML = this.responseText;
            exist = this.responseText;
          }
        };
        xhttp.open("POST", "http://localhost/web-sirima/index.php?contoller=register", true);
        xhttp.send(params);

        return exist;
      }
    </script>

    <script type="text/javascript">
      
      function validasiPendaftaranPelamar() {
        var username = document.getElementById('username');
        var password = document.getElementById('password');
        var ulangi_password = document.getElementById('ulangi_password');
        var nama_lengkap = document.getElementById('nama_lengkap');
        var no_ktp = document.getElementById('no_ktp');
        var jenis_kelamin = document.getElementById('jenis_kelamin');
        var tanggal_lahir = document.getElementById('tanggal_lahir');
        var alamat = document.getElementById('alamat');
        var email = document.getElementById('email');
        var ulangi_email = document.getElementById('ulangi_email');


        var username_message = document.getElementById('username_message');
        var ulangi_password_message = document.getElementById('ulangi_password_message');

        /*console.log(username.value);
        console.log(password.value);
        console.log(ulangi_password.value);
        console.log(nama_lengkap.value);
        console.log(no_ktp.value);
        console.log(jenis_kelamin.value);
        console.log(tanggal_lahir.value);
        console.log(alamat.value);
        console.log(email.value);
        console.log(ulangi_email.value);*/

        var good_color = "#4ba4df";
        var bad_color = "#e96152";

        if (!username.value.match(/^[a-zA-Z0-9.]*$/)) {
          //tidak valid
          username.style.backgroundColor = bad_color;
          username_message.style.color = bad_color;
          username_message.innerHTML = "Pastikan username hanya mengandung alphaber, numeric dan titik"
        } else {
          //regex valid
          //check username
          var is_exist = is_username_exist(username.value);
          console.log(is_exist);
        }

        return false;
      }

    </script>

    <script>
      $(document).ready(function() {
        $('#tanggal_lahir').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>

  </body>
</html>