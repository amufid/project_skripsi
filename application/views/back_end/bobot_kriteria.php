<main id="main" class="main">
       <div class="pagetitle">
              <h1>Bobot kriteria</h1>
              <nav>
                     <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Bobot kriteria</li>
                     </ol>
              </nav>

       </div>
       <!-- End Page Title -->

       <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
       </div>
       <?php if ($this->session->flashdata('message')): ?>
       <?php endif; ?>

       <!-- Example single danger button -->
       <div style="text-align: right;">
              <div class="btn-group">
                     <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2"
                            data-bs-toggle="dropdown" aria-expanded="false" style="text-align: right;">
                            Tambah subkriteria
                     </button>
                     <ul class="dropdown-menu">
                            <li><a class="dropdown-item modal-trigger" href="#" data-target="modalTambahDataTabel1">C1
                                          Kapasitas mesin</a></li>
                            <li><a class="dropdown-item modal-trigger" href="#" data-target="modalTambahDataTabel2">C2
                                          Kapasitas penumpang</a></li>
                            <li><a class="dropdown-item modal-trigger" href="#" data-target="modalTambahDataTabel3">C3
                                          Tahun pembuatan</a></li>
                            <li><a class="dropdown-item modal-trigger" href="#" data-target="modalTambahDataTabel4">C4
                                          Harga</a></li>
                            <li><a class="dropdown-item modal-trigger" href="#" data-target="modalTambahDataTabel5">C5
                                          Transmisi</a></li>
                            <li><a class="dropdown-item modal-trigger" href="#" data-target="modalTambahDataTabel6">C6
                                          Pajak tahunan</a></li>
                     </ul>
              </div>
       </div>
       <br>
       <!-- Table with stripped rows -->
       <section class="section">
              <div class="row text-center">
                     <div class="col-lg-12">
                            <div class="card">
                                   <div class="card-body">
                                          <br>
                                          <h5 class="text-white bg-primary">C1 Kapasitas mesin</h5>
                                          <table class="table table-bordered table-sm" style="text-align: center;">
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
                                                        foreach ($c1_kapmesin as $item) {
                                                               $no++; ?>
                                                               <tr>
                                                                      <td>
                                                                             <?= $no ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $item['sub_kriteria'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $item['bobot'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <a href="javascript:;"
                                                                                    onclick="openEditModalC1(
                                                                             <?= $item['id']; ?>, '<?= $item['sub_kriteria']; ?>',<?= $item['bobot']; ?>);"
                                                                                    class="btn btn-sm btn-outline-primary">
                                                                                    <i class="bi bi-pencil-square"></i></a>
                                                                             <a href="<?= base_url('data/hapusC1'); ?>/<?= $item['id'] ?>"
                                                                                    class="btn btn-sm btn-outline-danger">
                                                                                    <i class="bi bi-trash-fill"></i>
                                                                             </a>
                                                                      </td>
                                                               </tr>
                                                        <?php } ?>
                                                 </tbody>
                                          </table>
                                   </div>
                            </div>

                            <div class="card">
                                   <div class="card-body">
                                          <br>
                                          <h5 class="text-white bg-primary">C2 Kapasitas penumpang</h5>
                                          <table class="table table-bordered table-sm" style="text-align: center;">
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
                                                        foreach ($c2_kappenumpang as $kp) {
                                                               $no++; ?>
                                                               <tr>
                                                                      <td>
                                                                             <?= $no ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $kp['sub_kriteria'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $kp['bobot'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <a href="javascript:;"
                                                                                    onclick="openEditModalC2(
                                                                             <?= $kp['id']; ?>, '<?= $kp['sub_kriteria']; ?>',<?= $kp['bobot']; ?>);"
                                                                                    class="btn btn-sm btn-outline-primary">
                                                                                    <i class="bi bi-pencil-square"></i></a>
                                                                             <a href="<?= base_url('data/hapusC2'); ?>/<?= $kp['id'] ?>"
                                                                                    class="btn btn-sm btn-outline-danger">
                                                                                    <i class="bi bi-trash-fill"></i>
                                                                             </a>
                                                                      </td>
                                                               </tr>
                                                        <?php } ?>
                                                 </tbody>
                                          </table>
                                   </div>
                            </div>

                            <div class="card">
                                   <div class="card-body">
                                          <br>
                                          <h5 class="text-white bg-primary">C3 Tahun
                                                 pembuatan</h5>
                                          <table class="table table-bordered table-sm" style="text-align: center;">
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
                                                        foreach ($c3_thpembuatan as $c3) {
                                                               $no++; ?>
                                                               <tr>
                                                                      <td>
                                                                             <?= $no ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $c3['sub_kriteria'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $c3['bobot'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <a href="javascript:;"
                                                                                    onclick="openEditModalC3(
                                                                             <?= $c3['id']; ?>, '<?= $c3['sub_kriteria']; ?>',<?= $c3['bobot']; ?>);"
                                                                                    class="btn btn-sm btn-outline-primary">
                                                                                    <i class="bi bi-pencil-square"></i></a>
                                                                             <a href="<?= base_url('data/hapusC3'); ?>/<?= $c3['id'] ?>"
                                                                                    class="btn btn-sm btn-outline-danger">
                                                                                    <i class="bi bi-trash-fill"></i>
                                                                             </a>
                                                                      </td>
                                                               </tr>
                                                        <?php } ?>
                                                 </tbody>
                                          </table>
                                   </div>
                            </div>

                            <div class="card">
                                   <div class="card-body">
                                          <br>
                                          <h5 class="text-white bg-primary">C4 Harga</h5>
                                          <table class="table table-bordered table-sm" style="text-align: center;">
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
                                                        foreach ($c4_harga as $c4) {
                                                               $no++; ?>
                                                               <tr>
                                                                      <td>
                                                                             <?= $no ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $c4['sub_kriteria'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $c4['bobot'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <a href="javascript:;"
                                                                                    onclick="openEditModalC4(
                                                                             <?= $c4['id']; ?>, '<?= $c4['sub_kriteria']; ?>',<?= $c4['bobot']; ?>);"
                                                                                    class="btn btn-sm btn-outline-primary">
                                                                                    <i class="bi bi-pencil-square"></i></a>
                                                                             <a href="<?= base_url('data/hapusC4'); ?>/<?= $c4['id'] ?>"
                                                                                    class="btn btn-sm btn-outline-danger">
                                                                                    <i class="bi bi-trash-fill"></i>
                                                                             </a>
                                                                      </td>
                                                               </tr>
                                                        <?php } ?>
                                                 </tbody>
                                          </table>
                                   </div>
                            </div>

                            <div class="card">
                                   <div class="card-body">
                                          <br>
                                          <h5 class="text-white bg-primary">C5 Transmisi
                                          </h5>
                                          <table class="table table-bordered table-sm" style="text-align: center;">
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
                                                        foreach ($c5_transmisi as $c5) {
                                                               $no++; ?>
                                                               <tr>
                                                                      <td>
                                                                             <?= $no ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $c5['sub_kriteria'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $c5['bobot'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <a href="javascript:;"
                                                                                    onclick="openEditModalC5(
                                                                             <?= $c5['id']; ?>, '<?= $c5['sub_kriteria']; ?>',<?= $c5['bobot']; ?>);"
                                                                                    class="btn btn-sm btn-outline-primary">
                                                                                    <i class="bi bi-pencil-square"></i></a>
                                                                             <a href="<?= base_url('data/hapusC5'); ?>/<?= $c5['id'] ?>"
                                                                                    class="btn btn-sm btn-outline-danger">
                                                                                    <i class="bi bi-trash-fill"></i>
                                                                             </a>
                                                                      </td>
                                                               </tr>
                                                        <?php } ?>
                                                 </tbody>
                                          </table>
                                   </div>
                            </div>

                            <div class="card">
                                   <div class="card-body">
                                          <br>
                                          <h5 class="text-white bg-primary">C6 Pajak</h5>
                                          <table class="table table-bordered table-sm" style="text-align: center;">
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
                                                        foreach ($c6_pajak as $c6) {
                                                               $no++; ?>
                                                               <tr>
                                                                      <td>
                                                                             <?= $no ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $c6['sub_kriteria'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <?= $c6['bobot'] ?>
                                                                      </td>
                                                                      <td>
                                                                             <a href="javascript:;"
                                                                                    onclick="openEditModalC6(
                                                                             <?= $c6['id']; ?>, '<?= $c6['sub_kriteria']; ?>',<?= $c6['bobot']; ?>);"
                                                                                    class="btn btn-sm btn-outline-primary">
                                                                                    <i class="bi bi-pencil-square"></i></a>
                                                                             <a href="<?= base_url('data/hapusC6'); ?>/<?= $c6['id'] ?>"
                                                                                    class="btn btn-sm btn-outline-danger">
                                                                                    <i class="bi bi-trash-fill"></i>
                                                                             </a>
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

       <!-- Modal Tambah Data -->
       <div id="modalTambahDataTabel1" class="modal">
              <div class="modal-content">
                     <div style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>">
                                   <i class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Tambah Data C1</h4>
                     <br>
                     <!-- Isi form untuk menambahkan data -->
                     <form action="<?php echo base_url('data/fungsi_tambahC1'); ?>" method="post">
                            <div class="row mb-3">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required="">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" id="editBobot">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Tambah</button>
                                   </div>
                            </div>
                     </form>
              </div>
       </div>

       <!-- Modal edit data -->
       <div id="modalEditDataC1" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Edit Data C1</h4>
                     <br>
                     <!-- Isi form untuk menambahkan data -->
                     <?php echo form_open_multipart('data/fungsi_editC1'); ?>
                     <form action="editFormC1" method="post">
                            <div class="row mb-3">
                                   <input type="hidden" name="id" id="editId1">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required=""
                                                 id="editSubkriteria1">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" id="editBobot1"
                                                 required="">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                   </div>
                            </div>
                     </form>
                     <?php form_close(); ?>
              </div>
       </div>

       <!-- c2 -->
       <div id="modalTambahDataTabel2" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Tambah Data C2</h4>
                     <br>
                     <!-- Isi form untuk menambahkan data  -->
                     <form action="<?php echo base_url('data/fungsi_tambahC2'); ?>" method="post">
                            <div class="row mb-3">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required="">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" required="">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Tambah</button>
                                   </div>
                            </div>
                     </form>
              </div>
       </div>

       <div id="modalEditDataC2" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Edit Data C2</h4>
                     <br>
                     <!-- Isi form untuk menambahkan data -->
                     <?php echo form_open_multipart('data/fungsi_editC2'); ?>
                     <form action="editFormC2" method="post">
                            <div class="row mb-3">
                                   <input type="hidden" name="id" id="editId2">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required=""
                                                 id="editSubkriteria2">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" id="editBobot2">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                   </div>
                            </div>
                     </form>
                     <?php form_close(); ?>
              </div>
       </div>

       <!-- c3 -->
       <div id="modalTambahDataTabel3" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Tambah Data C3</h4>
                     <br>
                     <form action="<?php echo base_url('data/fungsi_tambahC3'); ?>" method="post">
                            <div class="row mb-3">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required="">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" required="">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Tambah</button>
                                   </div>
                            </div>
                     </form>
              </div>
       </div>

       <div id="modalEditDataC3" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Edit Data C3</h4>
                     <br>
                     <?php echo form_open_multipart('data/fungsi_editC3'); ?>
                     <form action="editFormC3" method="post">
                            <div class="row mb-3">
                                   <input type="hidden" name="id" id="editId3">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required=""
                                                 id="editSubkriteria3">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" id="editBobot3">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                   </div>
                            </div>
                     </form>
                     <?php form_close(); ?>
              </div>
       </div>

       <!-- c4 -->
       <div id="modalTambahDataTabel4" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Tambah Data C4</h4>
                     <br>
                     <form action="<?php echo base_url('data/fungsi_tambahC4'); ?>" method="post">
                            <div class="row mb-3">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required="">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" required="">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Tambah</button>
                                   </div>
                            </div>
                     </form>
              </div>
       </div>

       <div id="modalEditDataC4" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Edit Data C4</h4>
                     <br>
                     <?php echo form_open_multipart('data/fungsi_editC4'); ?>
                     <form action="editFormC4" method="post">
                            <div class="row mb-3">
                                   <input type="hidden" name="id" id="editId4">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required=""
                                                 id="editSubkriteria4">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" id="editBobot4">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                   </div>
                            </div>
                     </form>
                     <?php form_close(); ?>
              </div>
       </div>

       <!-- c5 -->
       <div id="modalTambahDataTabel5" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Tambah Data C5</h4>
                     <br>
                     <form action="<?php echo base_url('data/fungsi_tambahC5'); ?>" method="post">
                            <div class="row mb-3">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required="">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" required="">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Tambah</button>
                                   </div>
                            </div>
                     </form>
              </div>
       </div>

       <div id="modalEditDataC5" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Edit Data C5</h4>
                     <br>
                     <?php echo form_open_multipart('data/fungsi_editC5'); ?>
                     <form action="editFormC5" method="post">
                            <div class="row mb-3">
                                   <input type="hidden" name="id" id="editId5">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required=""
                                                 id="editSubkriteria5">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" id="editBobot5">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                   </div>
                            </div>
                     </form>
                     <?php form_close(); ?>
              </div>
       </div>

       <!-- c5 -->
       <div id="modalTambahDataTabel6" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Tambah Data C6</h4>
                     <br>
                     <form action="<?php echo base_url('data/fungsi_tambahC6'); ?>" method="post">
                            <div class="row mb-3">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required="">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" required="">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Tambah</button>
                                   </div>
                            </div>
                     </form>
              </div>
       </div>

       <div id="modalEditDataC6" class="modal">
              <div class="modal-content">
                     <div class="col-sm-12" style="text-align: right; font-size: 23px;">
                            <a href="<?= base_url('data/tampil_bobot_kriteria'); ?>"><i
                                          class="bi bi-x-square text-danger"></i></a>
                     </div>
                     <h4>Edit Data C6</h4>
                     <br>
                     <?php echo form_open_multipart('data/fungsi_editC6'); ?>
                     <form action="editFormC6" method="post">
                            <div class="row mb-3">
                                   <input type="hidden" name="id" id="editId6">
                                   <label for="sub_kriteria" class="col-sm-5 col-form-label">Subkriteria</label>
                                   <div class="col-sm-7">
                                          <input type="text" class="form-control" name="sub_kriteria" required=""
                                                 id="editSubkriteria6">
                                   </div>
                            </div>
                            <div class="row mb-3">
                                   <label for="bobot" class="col-sm-5 col-form-label">Bobot</label>
                                   <div class="col-sm-7">
                                          <select name="bobot" type="text" class="form-control" id="editBobot6">
                                                 <option selected>
                                                 </option>
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="row mb-2">
                                   <label class="col-sm-5 col-form-label"></label>
                                   <div class="text-center col-sm-12">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                   </div>
                            </div>
                     </form>
                     <?php form_close(); ?>
              </div>
       </div>

       <!-- css modal -->
       <style>
              .modal {
                     display: none;
                     position: fixed;
                     z-index: 1;
                     left: 0;
                     top: 0;
                     width: 100%;
                     height: 100%;
                     overflow: auto;
                     background-color: rgba(0, 0, 0, 0.4);
              }

              .modal-content {
                     background-color: #fff;
                     margin: 15% auto;
                     padding: 20px;
                     border: 1px solid #888;
                     width: 37%;
              }

              .modal.show .modal-content {
                     opacity: 1;
                     transform: scale(1);
              }

              .close {
                     color: #aaaaaa;
                     float: right;
                     font-size: 28px;
                     font-weight: bold;
              }

              .close:hover,
              .close:focus {
                     color: #000;
                     text-decoration: none;
                     cursor: pointer;
              }
       </style>
</main>