<div id="headline-carousel" class="fbt-ticker-slide carousel slide" data-ride="carousel">
  <div class="tt-wrapper">
    <span class="ticker-title">
      <i class="fa fa-rss"></i> <span>BREAKING NEWS</span>
    </span>
  </div>

  <div class="carousel-inner">
    <?php
        $terkini = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC");
        foreach ($terkini->result_array() as $key => $val) {
          $judulSeo = $val['judul'];
          $detailLink = base_url("berita/detail/" . $judulSeo);

          echo '<div class="carousel-item '.($key == 0 ? "active" : "").'">';
          echo '<a class="hover-link" href="' . $detailLink . '">';
          echo $judulSeo;
          echo '</a></div>';
        }
      ?>

  </div>
  <div class="fbt-control-wrapper d-lg-block d-none">
    <div class="fbt-ticker-control d-flex">
      <a class="fbt-control-prev control" href="#headline-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="fbt-control-next control" href="#headline-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
  </div>
</div>