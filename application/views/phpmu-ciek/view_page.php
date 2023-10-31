<section class="mb-4">
  <div class="title-container">
    <h4 class="title"><?= $record['judul'] ?></h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div>
    <?php
    if ($record['gambar'] != '') {
      echo "<img width='100%' src='" . base_url() . "asset/foto_statis/" . $record['gambar'] . "'>";
    }
    echo $record['isi_halaman'];
    ?>
  </div>

</section>
