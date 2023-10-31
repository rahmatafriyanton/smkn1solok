<!-- News -->
<section>
  <form action="<?= base_url('berita') ?>" class="form-inline" id="formku" role="form" method="post" accept-charset="utf-8" novalidate="novalidate">
    <div class="search-container">
      <input type="text" name='cari' class="form-control" placeholder="Cari Informasi Disini...">
      <button class="btn btn-light" name='submit' type="submit">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </form>
  <ul class="nav nav-tabs sidebar-nav" id="myTabs" role="tablist">
    <li role="presentation" class="nav-item">
      <a class="nav-link active" id="terpopuler-tab" data-toggle="tab" href="#terpopuler" role="tab" aria-controls="terpopuler" aria-selected="true">Terpopuler</a>
    </li>
    <li role="presentation" class="nav-item">
      <a class="nav-link" id="terkini-tab" data-toggle="tab" href="#terkini" role="tab" aria-controls="terkini" aria-selected="false">Terkini</a>
    </li>
    <li role="presentation" class="nav-item">
      <a class="nav-link" id="terkomentar-tab" data-toggle="tab" href="#terkomentar" role="tab" aria-controls="terkomentar" aria-selected="false">Terkomentar</a>
    </li>
  </ul>


  <div class="tab-content" id="myTabs">
    <div class="tab-pane active in" role="tabpanel" id="terpopuler" aria-labelledby="terpopuler-tab">

      <div class="sidebar-news">
        <?php
        $terbaru = $this->db->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori=b.id_kategori ORDER BY a.dibaca DESC LIMIT 5");
        foreach ($terbaru->result_array() as $row) {
          $tanggaldetail = tgl_indo($row['tanggal']);
          if ($row['gambar'] == '') {
            $fotodetail = 'small_no-image.jpg';
          } else {
            $fotodetail = $row['gambar'];
          }
        ?>
          <div class="news">
            <img src="<?php echo base_url(); ?>asset/foto_berita/<?php echo $fotodetail; ?>" alt="">

            <div class="content">
              <h5>
                <a href="<?php echo base_url(); ?>berita/detail/<?php echo $row['judul_seo']; ?>" class="title hover-link"><?php echo $row['nama_kategori']; ?> - <?php echo $row['judul']; ?></a>
              </h5>
              <div class="info"><?php echo $row['hari']; ?> - <?php echo $tanggaldetail; ?>, <?php echo $row['jam']; ?> WIB, Dibaca : <?php echo $row['dibaca']; ?> Kali</div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>

    </div>

    <div class="tab-pane fade" role="tabpanel" id="terkini" aria-labelledby="terkini-tab">
      <div class="sidebar-news">
        <?php
        $terkini = $this->db->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori=b.id_kategori ORDER BY a.id_berita DESC LIMIT 5");
        foreach ($terkini->result_array() as $row) {
          $tanggaldetail = tgl_indo($row['tanggal']);
          if ($row['gambar'] == '') {
            $fotodetail = 'small_no-image.jpg';
          } else {
            $fotodetail = $row['gambar'];
          }
        ?>
          <div class="news">
            <img src="<?php echo base_url(); ?>asset/foto_berita/<?php echo $fotodetail; ?>" alt="">

            <div class="content">
              <h5>
                <a href="<?php echo base_url(); ?>berita/detail/<?php echo $row['judul_seo']; ?>" class="title hover-link">
                  <?php echo $row['nama_kategori']; ?> - <?php echo $row['judul']; ?>
                </a>
              </h5>
              <div class="info"><?php echo $row['hari']; ?> - <?php echo $tanggaldetail; ?>, <?php echo $row['jam']; ?> WIB</div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>

    </div>

    <div class="tab-pane fade" role="tabpanel" id="terkomentar" aria-labelledby="terkomentar-tab">
      <div class="sidebar-news">
        <?php
        $terkomentar = $this->db->query("SELECT * FROM berita,komentar 
                                 WHERE komentar.id_berita=berita.id_berita  
                                 ORDER BY id_komentar DESC LIMIT 5");
        foreach ($terkomentar->result_array() as $row) {
          $tanggaldetail = tgl_indo($row['tanggal']);
          if ($row['gambar'] == '') {
            $fotodetail = 'small_no-image.jpg';
          } else {
            $fotodetail = $row['gambar'];
          }
        ?>
          <div class="news">
            <img src="<?php echo base_url(); ?>asset/foto_berita/<?php echo $fotodetail; ?>" alt="">

            <div class="content">
              <h5>
                <a href="<?php echo base_url(); ?>berita/detail/<?php echo $row['judul_seo']; ?>" class="title hover-link">
                  <?php echo $row['nama_komentar']; ?> pada <?php echo $row['judul']; ?>
                </a>
              </h5>
              <div class="info"><?php echo $row['hari']; ?> - <?php echo $tanggaldetail; ?>, <?php echo $row['jam']; ?> WIB</div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>

    </div>

</section>

<!-- End News -->


<!-- Sekilas Info -->

<section class="mt-3">
  <div class="title-container  mb-0">
    <h4 class="title">Sekilas Info</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div class="sidebar-news">
    <?php
    $pengumuman = $this->model_utama->pengumuman(0, 5);

    foreach ($pengumuman->result_array() as $rows) {
      if ($rows['gambar'] == '') {
        $fotoinfo = 'small_no-image.jpg';
      } else {
        $fotoinfo = $rows['gambar'];
      }

      $infoLink = base_url() . "link_pengumuman"; // Ganti dengan tautan pengumuman yang sesuai

      echo '<div class="news">';
      echo '    <img src="' . base_url() . 'asset/foto_info/' . $fotoinfo . '" alt="">';
      echo '    <div class="content">';
      echo '        <div class="deskripsi">';
      echo            $rows['info'];
      echo '        </div>';
      echo '    </div>';
      echo '</div>';
    }
    ?>

  </div>

</section>

<!-- End Sekilas Info -->


<!-- Statistik User -->

<section>
  <div class="title-container ">
    <h4 class="title">Statistik User</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <?php
  $pengunjung = $this->model_utama->pengunjung()->num_rows();
  $totalpengunjung = $this->model_utama->totalpengunjung()->row_array();
  $hits = $this->model_utama->hits()->row_array();
  $totalhits = $this->model_utama->totalhits()->row_array();
  $pengunjungonline = $this->model_utama->pengunjungonline()->num_rows();
  ?>

  <ul class="list-group statistik-user">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      User Online
      <span class="badge badge-statistik badge-pill"><?php echo $pengunjungonline; ?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Today Visitor
      <span class="badge badge-statistik badge-pill"><?php echo $pengunjung; ?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Hits hari ini
      <span class="badge badge-statistik badge-pill"><?php echo $hits['total']; ?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Total Hits
      <span class="badge badge-statistik badge-pill"><?php echo $totalhits['total']; ?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center alert" style="background-color: #9d0000; color: #fff;">
      Total pengunjung
      <span class="badge badge-statistik badge-pill"><?php echo $totalpengunjung['total']; ?></span>
    </li>
  </ul>

</section>

<!-- End Statistik User -->


<!-- Polling -->
<section>
  <div class="title-container">
    <h4 class="title">Polling</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <?php
  $qpoling = $this->model_utama->cek_poling()->num_rows();
  if ($qpoling > 0) {
    $row = $this->model_utama->pertanyaan()->row_array();
  ?>
    <form action="<?= base_url() ?>polling/index" method="post">
      <ul class="list-group sidebar-polling">
        <li class="list-group-item disabled"><?= $row['pilihan'] ?></li>

        <?php
        $jawaban = $this->model_utama->jawaban();
        foreach ($jawaban->result_array() as $rows) {
        ?>
          <li class="list-group-item">
            <label>
              <input type="radio" name="pilihan" value="<?= $rows['id_poling'] ?>" class="mr-2">
              <?= $rows['pilihan'] ?>
            </label>
          </li>
        <?php
        }
        ?>
      </ul>

      <button type="submit" class="btn btn-sm btn-outline-light btn-polling-submit">
        Kirimkan Pilihan
      </button>
    </form>
    <a class="btn-polling-result" href="<?= base_url() ?>polling/hasil">
      Lihat Hasil Poling
    </a>
  <?php
  }
  ?>
</section>



<!-- End Polling -->
