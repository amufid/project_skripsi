<main id="main" class="main">
  <div class="pagetitle">
    <h1>Profil</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Profil</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <?php echo form_open_multipart('auth/fungsi_edit_user'); ?>
  <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
  <section class="section">
    <div class="row">
      <div class="col-lg-7">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Profil Administrator</h5>
            <?= $this->session->flashdata('message'); ?>
            <!-- Horizontal Form -->
            <form>
              <br>
              <div class="row mb-3 text-center">
                <div class="col-sm-12">
                  <label for="inputEmail3" class="col-sm-3 col-form-label"><img
                      src="<?php echo base_url() . '/assets/foto/' . $user['foto']; ?>" alt="Profile"
                      width="133"></label>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label ">Nama lengkap :</label>
                <div class="col-sm-7">
                  <label for="inputEmail3" class="col-sm-7 col-form-label">
                    <?= $user['nama']; ?>
                  </label>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Email :</label>
                <div class="col-sm-7">
                  <label for="inputEmail3" class="col-sm-7 col-form-label">
                    <?= $user['email']; ?>
                  </label>
                </div>
              </div>
              <br>
              <div style="text-align: center;">
                <a href="<?= base_url('auth/tampil_edit_profil'); ?>" class="btn btn-primary"><i
                    class="ri-edit-2-line"></i>
                  Edit profil
                </a>
              </div>
              <br>
              <div class="text-center col-12">
                <p class="small mb-0"><a href="<?= base_url('auth/tampil_registrasi'); ?>">Buat akun baru?</a></p>
              </div>
              <!-- <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div> -->
            </form><!-- End Horizontal Form -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>