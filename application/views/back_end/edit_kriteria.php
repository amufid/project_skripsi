<main id="main" class="main">
       <div class="pagetitle">
              <h1>Edit Kriteria</h1>
              <nav>
                     <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Kriteria</a></li>
                            <li class="breadcrumb-item active">Edit Kriteria</li>
                     </ol>
              </nav>
       </div>
       <!-- End Page Title -->
       <div class="container-fluid">
              <thead>
                     <br>
                     <h3>
                            Edit Kriteria
                     </h3>
                     <?php echo form_open_multipart('data/fungsi_edit_kriteria'); ?>
                     <table>
                            <div class="form-group row mb-3">
                                   <input type="hidden" name="id" value="<?php echo $kriteria['id']; ?>">
                                   <label for="nama_kriteria" class="col-sm-2 col-form-label">Nama</label>
                                   <div class="col-sm-5">
                                          <input type="text" class="form-control" name="nama_kriteria"
                                                 value="<?php echo $kriteria['nama_kriteria']; ?>">
                                   </div>
                            </div>
                            <div class="form-group row mb-3">
                                   <label for="atribut" class="col-sm-2 col-form-label">Atribut</label>
                                   <div class="col-sm-5">
                                          <select name="atribut" type="text" class="form-select">
                                                 <option selected>
                                                        <?php echo $kriteria['atribut']; ?>
                                                 </option>
                                                 <option>Benefit</option>
                                                 <option>Cost</option>
                                          </select>
                                   </div>
                            </div>

                            <div class="form-group row mb-3">
                                   <label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
                                   <div class="col-sm-5">
                                          <select name="bobot" type="text" class="form-select">
                                                 <option selected>
                                                        <?php echo $kriteria['bobot']; ?>
                                                 </option>
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
                                   <div class="col-sm-5">
                                          <button type="submit" class="btn btn-primary">Update</button>
                                   </div>
                            </div>
                     </table>
                     <?php form_close(); ?>
              </thead>
       </div>
</main>