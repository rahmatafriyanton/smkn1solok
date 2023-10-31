<section class="mb-4">
  <div class="title-container">
    <h4 class="title"><?= $title ?></h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div>
    <?php
    if (isset($_COOKIE["poling"])) {
      echo "<div class='alert alert-danger text-center' style='margin-top:10%'>Maaf, Anda sudah pernah melakukan voting terhadap poling ini. <br>
            Lihat Hasil Polling <a href='" . base_url() . "polling/hasil'>Disini</a></div>";
    } else {
      setcookie("poling", "sudah poling", time() + 3600 * 24);
    ?>
      <p>Terimakasih atas partisipasi Anda mengikuti poling kami<br />
        Hasil poling saat ini:</p><br>
      <table class="table table-condensed">
        <?php
        $this->model_utama->vote($this->input->post('pilihan'));
        $j = $this->model_utama->jumlah_vote()->row_array();
        $jml_vote = $j['jml_vote'];

        $hasil = $this->model_utama->hasil_vote();
        foreach ($hasil->result_array() as $rows) {
          $prosentase = sprintf("%2.1f", (($rows['rating'] / $jml_vote) * 100));
          $gbr_vote = $prosentase * 3;
        ?>
          <tr>
            <td width="190"><?= $rows['pilihan'] ?> (<?= $rows['rating'] ?>)</td>
            <td>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $prosentase ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $prosentase ?>%;"><?= $prosentase ?>%</div>
              </div>
            </td>
          </tr>
        <?php } ?>
      </table>
      <div class="alert alert-success">Jumlah Voting Sampai Saat ini : <b><?= $jml_vote ?></b></div>
    <?php } ?>
  </div>
</section>
