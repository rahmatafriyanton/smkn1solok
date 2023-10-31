<!-- Semua Berita -->
<section class="mb-4">
  <div class="title-container">
    <h4 class="title">Hubungi Kami</h4>
    <div class="title-sep-container">
      <div class="title-sep"></div>
    </div>
  </div>

  <div class="row">

    <div class="col-md-12">
      Siahkan meninggalkan Pesan / Komentar / Masukan anda agar kami bisa memberikan pelayanan yang lebih baik lagi, Terima kasih.
    </div>

    <div class="col-md-12">
      <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.441581461451!2d100.64165917496497!3d-0.7873805992049662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2b331785898515%3A0x6e732d899c751834!2sVocational%20High%20School%20State%201%20of%20Solok%20City!5e0!3m2!1sen!2sid!4v1698591230067!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

      <div class="text-center"><?= $this->session->flashdata('message'); ?></div>
      <form id="formku" class="form-horizontal" role="form" method="post" action="<?= base_url('hubungi/index'); ?>">
        <hr>
        <div class="form-group mb-3">
          <label for="namaLengkap">Nama Lengkap</label>
          <input type="text" class="form-control required" name="a">
        </div>

        <div class="form-group mb-3">
          <label for="alamatEmail">Alamat Email</label>
          <input type="email" class="form-control required" name="b">
        </div>

        <div class="form-group mb-3">
          <label for="subjek">Subjek</label>
          <input type="text" class="form-control required" name="c">
        </div>

        <div class="form-group mb-3">
          <label for="isiPesan">Isi Pesan</label>
          <textarea class="form-control required" name="d" style="height:150px" minlength="10"></textarea>
        </div>

        <div class="form-group mb-3">
          <label style="margin-top:-5px"><?= $image; ?></label>
          <input name="secutity_code" maxlength="6" type="text" class="form-control" placeholder="Masukkan kode di sebelah kiri..">
        </div>

        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">Kirimkan</button>
        </div>
      </form>
    </div>

  </div>

</section>

<!-- End Semua Berita -->
