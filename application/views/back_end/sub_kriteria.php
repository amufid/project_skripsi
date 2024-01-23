<main id="main" class="main">
  <div class="pagetitle">
    <h1>Kriteria</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Kriteria</li>
      </ol>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              <div style="text-align: right;">
                <a href="<?= base_url('data/tambah_kriteria') ?>" class="btn btn-primary"><i class="ri-add-fill"></i>
                  Tambah data
                </a>
              </div>
            </th>
          </tr>
        </thead>
      </table>
    </nav>
  </div>
  <!-- End Page Title -->

  <?= $this->session->flashdata('message'); ?>
  <!-- End Page Title -->

  <!-- search js -->
  <!-- <script type="text/javascript" src="<?= base_url('assets/') ?>js/search.js"></script> -->

  <!-- Table with stripped rows -->
  <section class="section">
    <div class="row text-center">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Sub kriteria</th>
                  <th>Bobot</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($c1_kapmesin as $km) {
                  $no++; ?>
                  <tr>
                    <td>
                      <?= $no ?>
                    </td>
                    <td>
                      <?= $km['sub_kriteria'] ?>
                    </td>
                    <td>
                      <?= $km['bobot'] ?>
                    </td>
                    <td>
                      <a href="<?= base_url('data/edit_kriteria'); ?>/<?= $km['id'] ?>"
                        class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil-square"></i> Edit</a>
                      <a href="<?= base_url('data/hapus_kriteria'); ?>/<?= $km['id'] ?>"
                        class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash-fill"></i> Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>