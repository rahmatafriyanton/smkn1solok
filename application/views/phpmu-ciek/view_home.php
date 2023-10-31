<!-- Berita Terbaru -->
<section class="mb-4">
  <div class="title-container">
    <h4 class="title">Berita Terbaru</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div>
    <?php
    $headline = $this->model_utama->berita_utama(6, 6);
    foreach ($headline->result_array() as $row) {
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

  <a href="<?= base_url('/berita') ?>" class="btn btn-outline-light btn-more-news">Lebih Banyak</a>

</section>

<!-- End Berita Terbaru -->


<!-- Gallery -->
<section class="mb-4">
  <div class="title-container">
    <h4 class="title">Gallery</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div class="row">
    <?php
    $no = 1;
    $gallery = $this->db->query("SELECT * FROM gallery ORDER BY id_gallery DESC LIMIT 8");
    foreach ($gallery->result_array() as $row) {
    ?>
      <div class="col-md-3">
        <div class="card galeri-item">
          <h5 class="card-title"><?= $row['jdl_gallery']; ?></h5>
          <div class="card-body">
            <img class="card-img-top" src="<?= base_url(); ?>asset/img_galeri/<?= $row['gbr_gallery']; ?>" alt="<?= $row['jdl_gallery']; ?>">
            <button class="btn btn-modal btn-sm btn-block btn-light" data-toggle="modal" data-target="#<?= $row['id_gallery']; ?>">Lihat Foto</button>
          </div>
        </div>
      </div>

      <div id="<?= $row['id_gallery']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content box">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal">×</button>

            </div>
            <div class="modal-body">
              <img style="width:100%" src="<?= base_url(); ?>asset/img_galeri/<?= $row['gbr_gallery']; ?>" alt="<?= $row['jdl_gallery']; ?>" />
              <p style="margin-top:5px"><?= $row['keterangan']; ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php
      $no++;
    }
    ?>

  </div>
  <!-- End Gallery -->
</section>



<script>
  $(document).ready(function() {
    $(".btn-modal").click(function(e) {
      e.preventDefault(); // Menghentikan tindakan bawaan (contoh: mengikuti tautan)

      var modalId = $(this).data("target"); // Dapatkan ID modal dari atribut data-target

      $(modalId).modal("show"); // Tampilkan modal yang sesuai
    });

  });
</script>
