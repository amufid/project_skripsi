<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/') ?>img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="<?= base_url('assets/') ?>/img/user.jpg" alt="">
                  <!-- <span class="d-none d-lg-block">NiceAdmin</span> -->
                </a>
              </div>
              <!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat akun baru</h5>
                    <p class="text-center small">Masukkan data yang valid</p>
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <?php echo form_open_multipart('auth/registrasi'); ?>

                  <form class="row g-3 needs-validation" method="post" action=" <?= base_url('auth/registrasi'); ?>">
                    <div class="col-12">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan nama"
                        value="<?= set_value('nama'); ?>">
                      <div class="invalid-feedback">Tolong, isi nama anda!</div>
                    </div>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email"
                        value="<?= set_value('email'); ?>">
                      <div class="invalid-feedback">tolong, masukkan alamat email yang valid!</div>
                    </div>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password"
                        placeholder="Masukkan password" value="<?= set_value('password'); ?>">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <label for="password" class="form-label">Konfirmasi Password</label>
                      <input type="password" name="password2" class="form-control" id="password2"
                        placeholder="Masukkan konfirmasi password" value="<?= set_value('password'); ?>">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <label for="foto" class="form-label">Foto</label>
                      <input type="file" name="userfile" class="form-control" id="foto" placeholder="foto"
                        value="<?= set_value('foto'); ?>">
                      <div class="invalid-feedback">Harap pilih foto!</div>
                    </div>
                    <br>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Buat akun</button>
                    </div>
                    <br>
                    <div class="col-12 text-center">
                      <p class="small mb-0">Sudah punya akun? <a href="<?= base_url('auth/logout'); ?>">Log
                          in</a></p>
                    </div>
                  </form>
                  <?php echo form_close(); ?>
                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/') ?>vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/quill/quill.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/') ?>js/main.js"></script>

</body>

</html>