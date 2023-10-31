<?php
foreach ($agenda->result_array() as $record) {
  $isi_berita = strip_tags($record['isi_agenda']);
  $isi = substr($isi_berita, 0, 120);
  $isi = substr($isi_berita, 0, strrpos($isi, " "));
  $tgl1 = tgl_indo($record['tgl_mulai']);
  $tgl2 = tgl_indo($record['tgl_selesai']);
  $tgl_posting = tgl_indo($record['tgl_posting']);
?>

  <div class="card agenda-item">
    <div class="card-body">
      <h5 class="title">
        <a class="hover-link" href="<?= base_url() ?>agenda/detail/<?= $record['tema_seo'] ?>"><b><?= $record['tema'] ?></b></a>
      </h5>
      <div class="info">
        <span class="fa fa-user"></span> Oleh : <?= $record['nama_lengkap'] ?>, Pada : <?= $tgl_posting ?>
      </div>
      <hr>
      <table class="table table-condensed table-sm table-bordered">
        <tr>
          <th width="120px">Waktu</th>
          <td><?= $record['tempat'] ?></td>
        </tr>
        <tr>
          <th width="120px">Tempat</th>
          <td><?= "$tgl1 s/d $tgl2, $record[jam] Wib" ?></td>
        </tr>
        <tr>
          <th width="120px">Pengirim</th>
          <td><?= $record['pengirim'] ?></td>
        </tr>
      </table>
    </div>
  </div>
  <div style="clear:both"><br></div>

<?php
}
?>
<?= $this->pagination->create_links(); ?>
