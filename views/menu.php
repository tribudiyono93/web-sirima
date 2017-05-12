<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SIRIMA</span></a>
    </div>

    <div class="clearfix"></div>

    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == t) { ?>

      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <!-- <h3>General</h3> -->
          <ul class="nav side-menu">
            <li><a href="form.html"><i class="fa fa-bookmark"></i> Rekap Pendaftaran </a>
            </li>
            <li><a href="form.html"><i class="fa fa-list-alt"></i> Daftar Pelamar Diterima </a>
            </li>
            <li><a href="index.php?controller=logout"><i class="fa fa-user"></i> Logout </a>
            </li>
          </ul>
        </div>
      </div>

    <?php } ?>

    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == f) { ?>

      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <!-- <h3>General</h3> -->
          <ul class="nav side-menu">
            <li><a href="form.html"><i class="fa fa-bookmark"></i> Membuat Pendaftaran </a>
            </li>
            <li><a href="form.html"><i class="fa fa-list-alt"></i> Riwayat Pendaftaran </a>
            </li>
            <li><a href="form.html"><i class="fa fa-list-alt"></i> Melihat Kartu Ujian </a>
            </li>
            <li><a href="form.html"><i class="fa fa-list-alt"></i> Melihat Hasil Seleksi </a>
            </li>
            <li><a href="index.php?controller=logout"><i class="fa fa-user"></i> Logout </a>
            </li>
          </ul>
        </div>
      </div>

    <?php } ?>


  </div>
</div>