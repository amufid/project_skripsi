<main id="main" class="main">
       <div class="pagetitle">
              <h1>Tambah kriteria</h1>
              <nav>
                     <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Kriteria</a></li>
                            <li class="breadcrumb-item active">Tambah kriteria</li>
                     </ol>
              </nav>
       </div>
       <!-- End Page Title -->
       <!-- Table with stripped rows -->
       <div class="container-fluid">
              <!-- <?php if (validation_errors()): ?>
              <div class="alert alert-danger" role="alert">
                     <?= validation_errors(); ?>
              </div>
       <?php endif; ?> -->
              <?php echo form_open_multipart('data/fungsi_tambah_kriteria'); ?>

              <div class="form-group row mb-3">
                     <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                     <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_kriteria" required="">
                     </div>
              </div>
              <div class="form-group row mb-3">
                     <label for="merk" class="col-sm-2 col-form-label">Atribut</label>
                     <div class="col-sm-5">
                            <select name="atribut" type="text" class="form-select">
                                   <option selected>--Pilih--</option>
                                   <option>Benefit</option>
                                   <option>Cost</option>
                            </select>
                     </div>
              </div>
              <div class="form-group row mb-3">
                     <label for="merk" class="col-sm-2 col-form-label">Bobot</label>
                     <div class="col-sm-5">
                            <select name="bobot" type="text" class="form-select">
                                   <option selected>--Pilih--</option>
                                   <option>1</option>
                                   <option>2</option>
                                   <option>3</option>
                                   <option>4</option>
                                   <option>5</option>
                            </select>
                     </div>
              </div>
              <div class="form-group row mb-3">
                     <label class="col-sm-2 col-form-label"></label>
                     <div class="text-center col-sm-5">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                     </div>
              </div>

              <?php echo form_close(); ?>
       </div>
       <!-- End Table with stripped rows -->
</main>