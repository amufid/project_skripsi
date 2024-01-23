<main id="main" class="main">
  <div class="pagetitle">
    <h1>Kriteria</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Kriteria</li>
      </ol>
    </nav>

  </div>
  <!-- End Page Title -->

  <!-- <?= $this->session->flashdata('message'); ?> -->

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
  </div>
  <?php if ($this->session->flashdata('message')): ?>
  <?php endif; ?>

  <!-- End Page Title -->

  <!-- Table with stripped rows -->

  <div style="text-align: right;">
    <a href="<?= base_url('data/tambah_kriteria') ?>" class="btn btn-primary"><i class="ri-add-fill"></i>
      Tambah data
    </a>
  </div>
  <br>
  <section class="section">
    <div class="row text-center">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <br>
            <table class="table table-bordered ">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama kriteria</th>
                  <th>Atribut</th>
                  <th>Bobot</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($kriteria as $kr) {
                  $no++; ?>
                  <tr>
                    <td>
                      <?= $no ?>
                    </td>
                    <td>
                      <?= $kr['nama_kriteria'] ?>
                    </td>
                    <td>
                      <?= $kr['atribut'] ?>
                    </td>
                    <td>
                      <?= $kr['bobot'] ?>
                    </td>
                    <td>
                      <a href="<?= base_url('data/edit_kriteria'); ?>/<?= $kr['id'] ?>"
                        class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Edit">
                        <i class="bi bi-pencil-square"></i></a>
                      <a href="<?= base_url('data/hapus_kriteria'); ?>/<?= $kr['id'] ?>"
                        class="btn btn-sm btn-outline-danger" ata-bs-toggle="tooltip" data-bs-placement="right"
                        title="Hapus">
                        <i class="bi bi-trash-fill"></i></a>
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