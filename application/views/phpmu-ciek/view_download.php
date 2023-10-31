<!-- Semua Berita -->
<section class="mb-4">
  <div class="title-container">
    <h4 class="title">Halaman Download</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div>
    <table class="table table-download table-condensed table-hover">
      <tr>
        <th>No</th>
        <th>Nama File</th>
        <th>Hits</th>
        <th></th>
      </tr>
      <?php
      $no = $this->uri->segment(3) + 1;
      foreach ($download->result_array() as $r) {
        $tgl = tgl_indo($r['tgl_posting']);
      ?>
        <tr>
          <td width="10px"><?= $no; ?></td>
          <td><?= $r['judul']; ?></td>
          <td><?= $r['hits']; ?> kali</td>
          <td width="70px">
            <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>download/file/<?= $r['nama_file']; ?>">
              <span class="glyphicon glyphicon-download-alt"></span> Download
            </a>
          </td>
        </tr>
      <?php
        $no++;
      }
      ?>
    </table>
  </div>

  <?php echo $this->pagination->create_links(); ?>
</section>

<!-- End Semua Berita -->
