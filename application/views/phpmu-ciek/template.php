<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('template/custom/assets/css/style.css'); ?>" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <title>
    <?php include "phpmu-title.php"; ?>
  </title>
</head>

<body>
  <header class="header-section">
    <div class="fbt-top-bar">
      <div class="container">
        <div class="top-bar-inner">
          <div class="fbt-ticker-wrapper">
            <?php include "breaking-news.php"; ?>
          </div>


          <div class="fbt-header-date">
            <span class="date-today">
              <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
              <?= hari_ini() . ", " . tgl_indoo(date('Y-m-d')) ?>
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Bootstrap dengan kelas CSS khusus -->
    <?php include "main-menu.php"; ?>
  </header>

  <?php
  if ($this->uri->segment(1) == '' or $this->uri->segment(1) == 'utama') {
    include "home-slider.php";
  }
  ?>

  <div class="container my-4">
    <div class="row">
      <div class="col-md-8">
        <?php echo $contents; ?>
      </div>

      <div class="col-md-4">
        <?php include('sidebar.php') ?>
      </div>
    </div>
  </div>
  <!-- Main Content -->

  <!-- Footer -->
  <section class="footer">
    <div class="container">
      <div class="d-flex">
        <div class="info">
          <img src="<?= base_url('template/custom/assets/img/logo.png'); ?>" alt="">
          <p>&copy; <?= date('Y') ?> SMK Negeri 1 Solok</p>
        </div>

        <div class="social-media">

        </div>
      </div>
    </div>
  </section>
  <!-- End Footer -->

  <!-- Js -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
