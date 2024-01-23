<main id="main" class="main">
       <div class="pagetitle">
              <h1>Tambah data alternatif</h1>
              <nav>
                     <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Data alternatif</a></li>
                            <li class="breadcrumb-item active">Tambah data alternatif</li>
                     </ol>
              </nav>
       </div>
       <!-- End Page Title -->
       <!-- Table with stripped rows -->

       <section class="section">
              <div class="row">
                     <div class="col-lg-9">
                            <div class="card">
                                   <div class="card-body">
                                          <h5 class="card-title">Tambah alternatif</h5>

                                          <?php echo form_open_multipart('data/fungsi_tambah_alternatif'); ?>
                                          <form>
                                                 <?php if (validation_errors()): ?>
                                                        <div class="alert alert-danger" role="alert">
                                                               <?= validation_errors(); ?>
                                                        </div>
                                                 <?php endif; ?>
                                                 <div class="row mb-3">
                                                        <label for="kode" class="col-sm-5 col-form-label">Kode</label>
                                                        <div class="col-sm-7">
                                                               <input type="text" class="form-control" name="kode"
                                                                      value="<?php echo kodeOlxOtomatis(); ?>" readonly>
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="merk" class="col-sm-5 col-form-label">Merk</label>
                                                        <div class="col-sm-7">
                                                               <select name="merk" type="text" class="form-select"
                                                                      required="">
                                                                      <option selected></option>
                                                                      <option disabled>-Pilih merk-</option>
                                                                      <option>Honda</option>
                                                                      <option>Nissan</option>
                                                                      <option>Mitsubishi</option>
                                                                      <option>Toyota</option>
                                                                      <option>Kia</option>
                                                                      <option>Suzuki</option>
                                                                      <option>Datsun</option>
                                                                      <option>Daihatsu</option>
                                                                      <option>Wuling</option>
                                                                      <option>Ford</option>
                                                               </select>
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="model" class="col-sm-5 col-form-label">Model</label>
                                                        <div class="col-sm-7">
                                                               <input type="text" class="form-control" name="model"
                                                                      required="">
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="kap_mesin" class="col-sm-5 col-form-label">Kapasitas
                                                               mesin</label>
                                                        <div class="col-sm-7">
                                                               <input type="text" class="form-control" name="kap_mesin"
                                                                      required="">
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="kap_penumpang"
                                                               class="col-sm-5 col-form-label">Kapasitas
                                                               penumpang</label>
                                                        <div class="col-sm-7">
                                                               <select name="kap_penumpang" type="text"
                                                                      class="form-select" required="">
                                                                      <option selected></option>
                                                                      <option disabled>-Pilih jumlah-</option>
                                                                      <option value="8">8 penumpang</option>
                                                                      <option value="7">7 penumpang</option>
                                                                      <option value="6">6 penumpang</option>
                                                                      <option value="5">5 penumpang</option>
                                                                      <option value="2">2 penumpang</option>
                                                               </select>
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="th_pembuatan" class="col-sm-5 col-form-label">Tahun
                                                               pembuatan</label>
                                                        <div class="col-sm-7">
                                                               <?php
                                                               $now = date('Y');
                                                               $th = $now - 1;
                                                               ?>
                                                               <?php
                                                               $now = date('Y'); ?>
                                                               <input type="number" class="form-control"
                                                                      name="th_pembuatan" min="1990"
                                                                      max="<?php echo $th ?>" required="">
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="harga" class="col-sm-5 col-form-label">Harga</label>
                                                        <div class="col-sm-7">
                                                               <input type="text" class="form-control" name="harga"
                                                                      required="">
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="transmisi"
                                                               class="col-sm-5 col-form-label">Transmisi</label>
                                                        <div class="col-sm-7">
                                                               <select name="transmisi" type="text" class="form-select"
                                                                      required="">
                                                                      <option selected></option>
                                                                      <option disabled>-Pilih-</option>
                                                                      <option value="MT">MT(manual)</option>
                                                                      <option value="AT">AT(matic)</option>
                                                               </select>
                                                        </div>
                                                 </div>
                                                 <div class="row mb-3">
                                                        <label for="pajak" class="col-sm-5 col-form-label">Pajak
                                                               tahunan</label>
                                                        <div class="col-sm-7">
                                                               <input type="text" class="form-control" name="pajak"
                                                                      required="">
                                                        </div>
                                                 </div>

                                                 <h5 class="card-title">Tambah nilai bobot alternatif</h5>

                                                 <div class="row mb-3">
                                                        <label for="c1" class="col-sm-5 col-form-label">(C1) Kapasitas
                                                               mesin</label>
                                                        <div class="col-sm-7">
                                                               <select name="c1" type="text" class="form-select"
                                                                      required="">
                                                                      <option selected></option>
                                                                      <option disabled>-Pilih-</option>
                                                                      <option value="5"> > 2000cc</option>
                                                                      <option value="4">1800cc – 2000cc</option>
                                                                      <option value="3">1500cc – 1799cc</option>
                                                                      <option value="2">1200cc – 1499cc</option>
                                                                      <option value="1">
                                                                             < 1200cc</option>
                                                               </select>
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="c2" class="col-sm-5 col-form-label">(C2) Kapasitas
                                                               penumpang</label>
                                                        <div class="col-sm-7">
                                                               <select name="c2" type="text" class="form-select"
                                                                      required="">
                                                                      <option selected></option>
                                                                      <option disabled>-Pilih-</option>
                                                                      <option value="5">8 penumpang</option>
                                                                      <option value="4">7 penumpang</option>
                                                                      <option value="3">6 penumpang</option>
                                                                      <option value="2">5 penumpang</option>
                                                                      <option value="1">2 penumpang</option>
                                                               </select>
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="c3" class="col-sm-5 col-form-label">(C3) Tahun
                                                               pembuatan</label>
                                                        <div class="col-sm-7">
                                                               <select name="c3" type="text" class="form-select"
                                                                      required="">
                                                                      <option selected></option>
                                                                      <option disabled>-Pilih-</option>
                                                                      <option value="5">> 2018</option>
                                                                      <option value="4">2016 - 2018</option>
                                                                      <option value="3">2013 - 2015</option>
                                                                      <option value="2">2010 - 2012</option>
                                                                      <option value="1">
                                                                             < 2010</option>
                                                               </select>
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label for="c4" class="col-sm-5 col-form-label">(C4)
                                                               Harga</label>
                                                        <div class="col-sm-7">
                                                               <select name="c4" type="text" class="form-select"
                                                                      required="">
                                                                      <option selected></option>
                                                                      <option disabled>-Pilih-</option>
                                                                      <option value="5">> 200jt</option>
                                                                      <option value="4">161jt - 200jt</option>
                                                                      <option value="3">121jt - 160jt</option>
                                                                      <option value="2">80jt - 120jt</option>
                                                                      <option value="1">
                                                                             < 80jt</option>
                                                               </select>
                                                        </div>
                                                 </div>
                                                 <div class="row mb-3">
                                                        <label for="c5" class="col-sm-5 col-form-label">(C5)
                                                               Transmisi</label>
                                                        <div class="col-sm-7">
                                                               <select name="c5" type="text" class="form-select"
                                                                      required="">
                                                                      <option selected></option>
                                                                      <option disabled>-Pilih-</option>
                                                                      <option value="5">Matic(AT)</option>
                                                                      <option value="3">Manual(MT)</option>
                                                               </select>
                                                        </div>
                                                 </div>
                                                 <div class="row mb-3">
                                                        <label for="c6" class="col-sm-5 col-form-label">(C6) Pajak
                                                               tahunan</label>
                                                        <div class="col-sm-7">
                                                               <select name="c6" type="text" class="form-select"
                                                                      required="">
                                                                      <option selected></option>
                                                                      <option disabled>-Pilih-</option>
                                                                      <option value="5">> 4jt</option>
                                                                      <option value="4">3,1jt – 4jt</option>
                                                                      <option value="3">2,1jt – 3jt</option>
                                                                      <option value="2">1jt – 2jt</option>
                                                                      <option value="1">
                                                                             < 1jt</option>
                                                               </select>
                                                        </div>
                                                 </div>

                                                 <div class="row mb-3">
                                                        <label class="col-sm-5 col-form-label"></label>
                                                        <div class="text-center col-sm-12">
                                                               <button type="submit"
                                                                      class="btn btn-primary">Tambah</button>
                                                               <button type="reset"
                                                                      class="btn btn-danger">Reset</button>
                                                        </div>
                                                 </div>

                                          </form>
                                          <?php echo form_close(); ?>
                                   </div>
                            </div>
                     </div>
              </div>
       </section>
</main>