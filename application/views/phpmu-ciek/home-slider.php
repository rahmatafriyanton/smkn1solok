<div id="carousel-header" class="carousel carousel-header slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
    $headline = $this->model_utama->headline(0, 5);
    $no = 1;
    foreach ($headline->result_array() as $row) {
      if ($no == 1) {
        $active = 'active';
      } else {
        $active = '';
      }
      if ($row['gambar'] == '') {
        $foto_slide = 'no-image.jpg';
      } else {
        $foto_slide = $row['gambar'];
      }
      $tgl = tgl_indo($row['tanggal']);
      $detailLink = base_url() . "berita/detail/$row[judul_seo]";

      echo "<div class='carousel-item $active' style='
                  background-image: url(\"" . base_url() . "asset/foto_berita/$foto_slide\");
                '>
            <div class='overlay'></div>
            <div class='carousel-caption'>
              <a class='title hover-link' href='$detailLink'>
                $row[judul]
              </a>
              <div class='info text-capitalize'>$row[username] - $tgl | $row[jam] WIB</div>
            </div>
          </div>";
      $no++;
    }
    ?>

  </div>


</div>

<div class="header-headline-card">
  <?php
  foreach ($headline->result_array() as $row) {
    $foto_slide = empty($row['gambar']) ? 'no-image.jpg' : $row['gambar'];
    $tgl = tgl_indo($row['tanggal']);
    $detailLink = base_url() . "berita/detail/$row[judul_seo]";
  ?>

    <div class="card card-news">
      <img class="card-img-top" src="<?= base_url() ?>asset/foto_berita/<?= $foto_slide ?>" alt="" />
      <div class="card-body">
        <a href="<?= $detailLink ?>" class="card-title hover-link">
          <?= $row['judul'] ?>
        </a>
        <div class="info text-capitalize">
          <?= $row['username'] ?> -
          <?= $tgl ?> |
          <?= $row['jam'] ?> WIB
        </div>
      </div>
    </div>

  <?php
  }
  ?>

</div>
