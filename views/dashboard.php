<?php 
include_once('views/header.php');
include_once('views/menu.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
      	<?php if ($_SESSION['role'] == t) {?>
      		<h1>Selamat datang Admin</h1>
      	<?php } else { ?>
      		<h1>Selamat datang Peserta</h1>
      	<?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<?php 
include_once('views/footer.php');
?>