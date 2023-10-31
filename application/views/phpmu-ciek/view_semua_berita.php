<!-- Semua Berita -->
<section class="mb-4">
  <div class="title-container">
    <h4 class="title"><?= $title ?></h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div>
    <?php
    $no = 1;
    foreach ($berita->result_array() as $row) {
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
      $no++;
    }
    ?>
  </div>

  <?php echo $this->pagination->create_links(); ?>

</section>

<!-- End Semua Berita -->
