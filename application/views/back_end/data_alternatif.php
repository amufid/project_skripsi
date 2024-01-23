<main id="main" class="main">
  <div class="pagetitle">
    <h1>Alternatif</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Alternatif</a></li>
        <li class="breadcrumb-item active">Alternatif Showroom OLX</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
  </div>
  <?php if ($this->session->flashdata('message')): ?>
  <?php endif; ?>

  <div style="text-align: right;">
    <a href="<?= base_url('data/tambah_data_alternatif'); ?>" class="btn btn-primary"><i class="ri-add-fill"></i>
      Tambah data
    </a>
  </div>
  <br>
  <!-- Table with stripped rows -->
  <section class="section">
    <div class="row text-center">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <br>
            <table id="example" class="display text-center lh-sm" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center">Kode</th>
                  <th class="text-center">Merk</th>
                  <th class="text-center">Model</th>
                  <th class="text-center">Kapasitas mesin</th>
                  <th class="text-center">Kapasitas penumpang</th>
                  <th class="text-center">Tahun pembuatan</th>
                  <th class="text-center">Harga</th>
                  <th class="text-center">Transmisi</th>
                  <th class="text-center">Pajak tahunan</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($data_alternatif as $dp) {
                  $no++; ?>
                  <tr>
                    <th>
                      <?= $dp['kode'] ?>
                    </th>
                    <td>
                      <?= $dp['merk'] ?>
                    </td>
                    <td>
                      <?= $dp['model'] ?>
                    </td>
                    <td>
                      <?= $dp['kap_mesin'] ?>
                    </td>
                    <td>
                      <?= $dp['kap_penumpang'] ?>
                    </td>
                    <td>
                      <?= $dp['th_pembuatan'] ?>
                    </td>
                    <td>
                      Rp
                      <?= $dp['harga'] ?>
                    </td>
                    <td>
                      <?= $dp['transmisi'] ?>
                    </td>
                    <td>
                      Rp
                      <?= $dp['pajak'] ?>
                    </td>
                    <td>
                      <a href="<?= base_url('data/edit_data_alternatif'); ?>/<?= $dp['id'] ?>"
                        class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Edit"><i class="bi bi-pencil-square"></i></a>
                      <a href="<?= base_url('data/hapus_data_alternatif'); ?>/<?= $dp['id'] ?>"
                        class="btn btn-sm btn-outline-danger" ata-bs-toggle="tooltip" data-bs-placement="left"
                        title="Hapus"><i class="bi bi-trash-fill"></i></a>
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

  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
</main>