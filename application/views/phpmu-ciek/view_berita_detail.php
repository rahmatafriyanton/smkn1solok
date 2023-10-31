<!-- Detail Berita -->
<section class="mb-4">
  <div class="detail-news">
    <h3 class="title">
      <?= $record['judul'] ?>
    </h3>

    <div class="info">
      <div class="publish">
        <div class="author">
          <i class="fa fa-user mr-1"></i> <?= $record['nama_lengkap'] ?>
        </div>
        <div class="time">
          <i class="fa fa-clock mr-1"></i>
          <?= $record['hari']; ?> - <?= tgl_indo($record['tanggal']); ?>, <?= $record['jam']; ?> WIB
        </div>
      </div>

      <div class="line"></div>


    </div>

    <?php
    if ($record['gambar'] != '') {
      echo "<img class='banner' src='" . base_url() . "asset/foto_berita/" . $record['gambar'] . "'>";
    }
    ?>

    <div class="content">
      <?= $record['isi_berita'] ?>
      <div class="category-container mt-5">
        <?= " Kategori: <a href='" . base_url() . "berita/kategori/$record[kategori_seo]'>$record[nama_kategori]</a>" ?>
      </div>
    </div>

  </div>

</section>

<section class="comment-section">
  <div class="title-container">
    <h4 class="title">Komentar</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <form action="">
    <div class="form-group mb-3">
      <input type="text" class="form-control" placeholder="Nama Lengkap">
    </div>

    <div class="form-group mb-3">
      <input type="email" class="form-control" placeholder="Email">
    </div>

    <div class="form-group mb-3">
      <textarea type="text" rows="5" class="form-control" placeholder="Nama Lengkap"></textarea>
    </div>

    <button type="submit" class="btn btn-dark">
      Kirim
    </button>
  </form>
</section>

<!-- End Detail Berita -->


<!-- Berita Terkait -->
<section class="mb-4 mt-5">
  <div class="title-container">
    <h4 class="title">Berita Terkait</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div>
    <?php
    foreach ($infoterkait->result_array() as $row) {
      $isi_berita = strip_tags($row['isi_berita']);
      $isi = substr($isi_berita, 0, 200);
      $isi = substr($isi_berita, 0, strrpos($isi, " "));
      $tanggal = tgl_indo($row['tanggal']);
      if ($row['gambar'] == '') {
        $foto = 'small_no-image.jpg';
      } else {
        $foto = $row['gambar'];
      }
      $detailLink = base_url() . "berita/detail/$row[judul_seo]";
    ?>
      <div class="berita-container">
        <img src="<?php echo base_url(); ?>asset/foto_berita/<?php echo $foto; ?>" alt="Gambar Berita 1" class="berita-gambar">
        <div class="berita-konten">
          <span class="badge badge-light text-white">Berita</span>
          <h5>
            <a href="<?php echo $detailLink; ?>" class="berita-judul hover-link"><?php echo $row['judul']; ?></a>
          </h5>
          <div class="berita-info"><?php echo $row['hari']; ?> - <?php echo $tanggal; ?>, <?php echo $row['jam']; ?> WIB, Dibaca : <?php echo $row['dibaca']; ?> Kali</div>
          <div class="berita-deskripsi"><?php echo $isi; ?>...</div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>

</section>

<!-- End Berita Terkait -->
