<main id="main" class="main">
       <div class="pagetitle">
              <h1>Perhitungan</h1>
              <nav>
                     <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Perhitungan OLX</li>
                     </ol>
              </nav>

       </div>
       <!-- End Page Title -->

       <style>
              /* Gaya untuk tata letak */
              .container {
                     display: flex;
                     justify-content: space-between;
                     font-size: 16px;
              }

              .column {
                     flex-basis: 20%;
                     /* Lebar masing-masing kolom */
              }

              table {
                     border-collapse: collapse;
                     width: 100%;
              }

              th,
              td {
                     padding: 8px;
                     text-align: center;
                     border-bottom: 1px solid #474747;
              }

              tr:hover {
                     background-color: #D3D3D3;
              }
       </style>

       <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
       </div>
       <?php if ($this->session->flashdata('message')): ?>
       <?php endif; ?>

       <body>
              <div class="row">
                     <div class="col-lg-12">
                            <div class="card">
                                   <div class="card-body">
                                          <h5 class="fw-bold text-center">Bobot Subkriteria</h5>
                                          <div class="container">
                                                 <div class="column">
                                                        <table class="table table-bordered lh-sm">
                                                               <thead>
                                                                      <th colspan="2">Kapasitas mesin</th>
                                                                      <tr>
                                                                             <th>
                                                                                    Subkriteria
                                                                             </th>
                                                                             <th>
                                                                                    Bobot
                                                                             </th>
                                                                      </tr>
                                                               </thead>
                                                               <?php foreach ($c1_kapmesin as $c1) { ?>
                                                                      <tbody>
                                                                             <td>
                                                                                    <?php echo $c1['sub_kriteria'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $c1['bobot'] ?>
                                                                             </td>
                                                                      </tbody>
                                                               <?php } ?>
                                                        </table>
                                                 </div>
                                                 <div class="column">
                                                        <table class="table table-bordered lh-sm">
                                                               <thead>
                                                                      <th colspan="2">Kapasitas Penumpang</th>
                                                                      <tr>
                                                                             <th>
                                                                                    Subkriteria
                                                                             </th>
                                                                             <th>
                                                                                    Bobot
                                                                             </th>
                                                                      </tr>
                                                               </thead>
                                                               <?php foreach ($c2_kappenumpang as $c2) { ?>
                                                                      <tbody>
                                                                             <td>
                                                                                    <?php echo $c2['sub_kriteria'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $c2['bobot'] ?>
                                                                             </td>
                                                                      </tbody>
                                                               <?php } ?>
                                                        </table>
                                                 </div>
                                                 <div class="column">
                                                        <table class="table table-bordered lh-sm">
                                                               <thead>
                                                                      <th colspan="2">Tahun pembuatan</th>
                                                                      <tr>
                                                                             <th>
                                                                                    Subkriteria
                                                                             </th>
                                                                             <th>
                                                                                    Bobot
                                                                             </th>
                                                                      </tr>
                                                               </thead>
                                                               <?php foreach ($c3_thpembuatan as $c3) { ?>
                                                                      <tbody>
                                                                             <td>
                                                                                    <?php echo $c3['sub_kriteria'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $c3['bobot'] ?>
                                                                             </td>
                                                                      </tbody>
                                                               <?php } ?>
                                                        </table>
                                                 </div>
                                                 <div class="column">
                                                        <table class="table table-bordered lh-sm">
                                                               <thead>
                                                                      <th colspan="2">Harga</th>
                                                                      <tr>
                                                                             <th>
                                                                                    Subkriteria
                                                                             </th>
                                                                             <th>
                                                                                    Bobot
                                                                             </th>
                                                                      </tr>
                                                               </thead>
                                                               <?php foreach ($c4_harga as $c4) { ?>
                                                                      <tbody>
                                                                             <td>
                                                                                    <?php echo $c4['sub_kriteria'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $c4['bobot'] ?>
                                                                             </td>
                                                                      </tbody>
                                                               <?php } ?>
                                                        </table>
                                                 </div>
                                                 <div class="column">
                                                        <table class="table table-bordered lh-sm">
                                                               <thead>
                                                                      <th colspan="2">Transmisi</th>
                                                                      <tr>
                                                                             <th>
                                                                                    Subkriteria
                                                                             </th>
                                                                             <th>
                                                                                    Bobot
                                                                             </th>
                                                                      </tr>
                                                               </thead>
                                                               <?php foreach ($c5_transmisi as $c5) { ?>
                                                                      <tbody>
                                                                             <td>
                                                                                    <?php echo $c5['sub_kriteria'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $c5['bobot'] ?>
                                                                             </td>
                                                                      </tbody>
                                                               <?php } ?>
                                                        </table>
                                                 </div>
                                                 <div class="column">
                                                        <table class="table table-bordered lh-sm">
                                                               <thead>
                                                                      <th colspan="2">Pajak tahunan</th>
                                                                      <tr>
                                                                             <th>
                                                                                    Subkriteria
                                                                             </th>
                                                                             <th>
                                                                                    Bobot
                                                                             </th>
                                                                      </tr>
                                                               </thead>
                                                               <?php foreach ($c6_pajak as $c6) { ?>
                                                                      <tbody>
                                                                             <td>
                                                                                    <?php echo $c6['sub_kriteria'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $c6['bobot'] ?>
                                                                             </td>
                                                                      </tbody>
                                                               <?php } ?>
                                                        </table>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>

              <section class="section">
                     <div class="row text-center">
                            <div class="col-lg-12">
                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="fw-bold">Pilih
                                                        bobot</h5>
                                                 <?php echo form_open('perhitungan/updateData'); ?>
                                                 <table class="table table-bordered">
                                                        <thead>
                                                               <tr>
                                                                      <th>No</th>
                                                                      <th>Nama kriteria</th>
                                                                      <th>Atribut</th>
                                                                      <th>Bobot</th>
                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <?php
                                                               $no = 0;
                                                               foreach ($kriteria as $item):
                                                                      $no++; ?>
                                                                      <tr>
                                                                             <td>
                                                                                    <?= $no ?>
                                                                                    <input type="hidden"
                                                                                           name="data[<?php echo $item->id; ?>][id]"
                                                                                           value="<?php echo $item->id; ?>">
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $item->nama_kriteria; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $item->atribut; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <select name="data[<?php echo $item->id; ?>][bobot]"
                                                                                           type="text" class="form-select"
                                                                                           required="">
                                                                                           <option selected>
                                                                                                  <?php echo $item->bobot; ?>
                                                                                           </option>
                                                                                           <option disabled>-Pilih-</option>
                                                                                           <option value="5">5</option>
                                                                                           <option value="4">4</option>
                                                                                           <option value="3">3</option>
                                                                                           <option value="2">2</option>
                                                                                           <option value="1">1</option>
                                                                                    </select>
                                                                             </td>
                                                                      </tr>
                                                               <?php endforeach; ?>
                                                        </tbody>
                                                 </table>
                                                 <div class="row mb-2">
                                                        <div class="text-center col-sm-12">
                                                               <button type="submit" class="btn btn-success">
                                                                      <i class="ri-arrow-right-circle-line"></i> Proses
                                                               </button>
                                                        </div>
                                                 </div>
                                                 <?php echo form_close(); ?>
                                          </div>
                                   </div>

                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="text-white bg-primary">
                                                        Hasil Perangkingan</h5>
                                                 <table class="table table-bordered" style="text-align: center;">
                                                        <thead>
                                                               <tr>
                                                                      <th>Alternatif</th>
                                                                      <th>Model mobil</th>
                                                                      <th>Tahun pembuatan</th>
                                                                      <th>Preverensi (V)</th>
                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <?php
                                                               // $no = 0;
                                                               foreach ($pref as $hsil): ?>
                                                                      <tr>
                                                                             <td>
                                                                                    <?= $hsil['kode'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?= $hsil['model'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?= $hsil['th_pembuatan'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['hp'], 9);
                                                                                    echo $format ?>

                                                                             </td>
                                                                      </tr>

                                                               <?php endforeach; ?>
                                                        </tbody>
                                                 </table>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </section>
              <div class="row mb-2">
                     <div class="text-center col-sm-12">
                            <a href="<?= base_url('perhitungan/index') ?>" class="btn btn-success">Tampilkan
                                   semua
                                   hasil
                                   perhitungan!</a>
                     </diV>
              </div>
       </body>
</main>