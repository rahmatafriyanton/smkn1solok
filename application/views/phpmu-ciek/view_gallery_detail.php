<!-- Semua Berita -->
<section class="mb-4">
  <div class="title-container">
    <h4 class="title"><?= $title ?></h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div class="row">
    <?php
    $no = 1;
    if ($gallery->num_rows() <= 0) {
      echo "<div style='margin-top:70px' class='alert alert-danger'><center>Maaf, Tidak Ada Foto Pada Album Ini!<center></div>";
    }
    foreach ($gallery->result_array() as $row) {
      $jml = $this->model_utama->hitungfoto($row['id_album'])->num_rows();
    ?>
      <div class="col-md-4">
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

  <?php echo $this->pagination->create_links(); ?>
</section>

<!-- End Semua Berita -->

<script>
  $(document).ready(function() {
    $(".btn-modal").click(function(e) {
      e.preventDefault(); // Menghentikan tindakan bawaan (contoh: mengikuti tautan)

      var modalId = $(this).data("target"); // Dapatkan ID modal dari atribut data-target

      $(modalId).modal("show"); // Tampilkan modal yang sesuai
    });

  });
</script>
