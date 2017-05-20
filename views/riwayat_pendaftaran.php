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
              <h1>Lihat Riwayat Pendaftaran</h1>
              <h2>Nama Lengkap: <?php echo $pelamar['nama_lengkap'];?></h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">Id Pendaftaran </th>
                    <th class="column-title">Nomor Periode </th>
                    <th class="column-title">Tahun Periode </th>
                    <th class="column-title">No Kartu Ujian </th>
                    <th class="column-title">Jalur</th>
                    <th class="column-title">Prodi 1 </th>
                    <th class="column-title">Prodi 2 </th>
                    <th class="column-title">Prodi 3 </th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="even pointer">
                    <td class=" "><a class="detail-pendaftaran" onClick="lihatDetailPendaftaran('5678', 'UUI');">5678</a></td>
                    <td class=" ">2</td>
                    <td class=" ">2017</td>
                    <td class=" ">KOSONG</td>
                    <td class=" ">UUI</td>
                    <td class=" ">S1 Fisika Reguler</td>
                    <td class=" ">S1 Biologi Reguler</td>
                    <td class=" ">Kosong</td>
                  </tr>
                  <tr class="ood pointer">
                    <td class=" "><a class="detail-pendaftaran" onClick="lihatDetailPendaftaran('5193', 'SEMAS PASCASARJANA');">5193</a></td>
                    <td class=" ">2</td>
                    <td class=" ">2017</td>
                    <td class=" ">1234512348</td>
                    <td class=" ">SEMAS PASCASARJANA</td>
                    <td class=" ">S2 Ilmu Komputer Reguler</td>
                    <td class=" ">Kosong</td>
                    <td class=" ">Kosong</td>
                  </tr>
                  <tr class="even pointer">
                    <td class=" "><a class="detail-pendaftaran" onClick="lihatDetailPendaftaran('1234', 'SEMAS SARJANA');">1234</a></td>
                    <td class=" ">1</td>
                    <td class=" ">2017</td>
                    <td class=" ">1234512345</td>
                    <td class=" ">SEMAS SARJANA</td>
                    <td class=" ">S1 Ilmu Komputer Reguler</td>
                    <td class=" ">S1 Biologi Reguler</td>
                    <td class=" ">S1 Fisika Reguler</td>
                  </tr>
                </tbody>
              </table>
              <ul class="pagination">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
            </div>
      
    
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