<!-- Semua Berita -->
<section class="mb-4">
  <div class="title-container">
    <h4 class="title">Album Foto</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div class="row">
    <?php
    $no = 1;
    foreach ($album->result_array() as $row) {
      $jml = $this->model_utama->hitungfoto($row['id_album'])->num_rows();
    ?>
      <div class="col-md-4">
        <div class="card galeri-item">
          <h5 class="card-title"><?= $row['jdl_album']; ?></h5>
          <div class="card-body">
            <img class="card-img-top" src="<?= base_url(); ?>asset/img_album/<?= $row['gbr_album']; ?>" alt="<?= $row['jdl_album']; ?>">
            <a href="<?= base_url(); ?>gallery/detail/<?= $row['album_seo']; ?>" class="btn btn-sm btn-block btn-light">Ada <?= $jml; ?> Foto</a>
          </div>
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
