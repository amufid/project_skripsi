<main id="main" class="main">
       <div class="pagetitle">
              <h1>Perhitungan</h1>
              <nav>
                     <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Perhitungan OLX</li>
                            <li class="breadcrumb-item active">Hasil</li>
                     </ol>
              </nav>
       </div>
       <!-- End Page Title -->

       <?= $this->session->flashdata('message'); ?>
       <!-- End Page Title -->

       <style>
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

       <!-- <div style="text-align: right;">
              <a href="<?= base_url('data/tambah_data_alternatif'); ?>" class="btn btn-primary"><i
                            class="ri-add-fill"></i>
                     Tambah alternatif
              </a>
       </div>
       <br> -->

       <body>
              <section class="section">
                     <div class="row text-center">
                            <div class="col-lg-12">
                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="text-white bg-primary">Bobot alternatif</h5>
                                                 <table class="table table-bordered">
                                                        <thead>
                                                               <tr>
                                                                      <th>Alternatif</th>
                                                                      <th>Model</th>
                                                                      <th>C1</th>
                                                                      <th>C2</th>
                                                                      <th>C3</th>
                                                                      <th>C4</th>
                                                                      <th>C5</th>
                                                                      <th>C6</th>
                                                                      <th>Aksi</th>
                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <?php

                                                               foreach ($data_alternatif as $rp):
                                                                      ?>
                                                                      <tr>
                                                                             <td>
                                                                                    <?php echo $rp['kode']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $rp['model']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $rp['c1']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $rp['c2']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $rp['c3']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $rp['c4']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $rp['c5']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php echo $rp['c6']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <a href="<?= base_url('data/edit_data_alternatif'); ?>/<?= $rp['id'] ?>"
                                                                                           class="btn btn-sm btn-outline-primary"
                                                                                           data-bs-toggle="tooltip"
                                                                                           data-bs-placement="left"
                                                                                           title="Edit"><i
                                                                                                  class="bi bi-pencil-square"></i></a>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                               </tr>
                                                        </tbody>
                                                 </table>
                                          </div>
                                   </div>

                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="text-white bg-primary">Pembagi</h5>

                                                 <table class="table table-bordered" style="text-align: center;">
                                                        <thead>
                                                               <tr>
                                                                      <th>C1</th>
                                                                      <th>C2</th>
                                                                      <th>C3</th>
                                                                      <th>C4</th>
                                                                      <th>C5</th>
                                                                      <th>C6</th>
                                                                      <!-- <!-Tambahkan kolom-kolom lain yang dibutuhkan  -->
                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <?php foreach ($hasil_akar as $qw): ?>
                                                                      <tr>
                                                                             <?php foreach ($qw as $hasil): ?>
                                                                                    <td>

                                                                                           <?php $format = number_format($hasil, 8);
                                                                                           echo $format; ?>
                                                                                    </td>
                                                                             <?php endforeach; ?>
                                                                      </tr>
                                                               <?php endforeach; ?>
                                                        </tbody>
                                                 </table>
                                          </div>
                                   </div>


                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="text-white bg-primary">
                                                        Matriks
                                                        ternormalisasi</h5>
                                                 <table class="table table-bordered" style="text-align: center;">
                                                        <thead>
                                                               <tr>
                                                                      <th>Alternatif</th>
                                                                      <th>C1</th>
                                                                      <th>C2</th>
                                                                      <th>C3</th>
                                                                      <th>C4</th>
                                                                      <th>C5</th>
                                                                      <th>C6</th>

                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <tr>
                                                                      <?php
                                                                      foreach ($matriks_ternormalisasi as $hsil): ?>
                                                                      <tr>
                                                                             <td>
                                                                                    <?= $hsil['kode']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c1'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c2'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c3'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c4'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c5'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c6'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      </tr>
                                                               <?php endforeach; ?>
                                                               </tr>
                                                        </tbody>
                                                 </table>
                                          </div>
                                   </div>
                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="text-white bg-primary">
                                                        Matriks
                                                        ternormalisasi dan terbobot</h5>
                                                 <table class="table table-bordered" style="text-align: center;">
                                                        <thead>
                                                               <tr>
                                                                      <th>Alternatif</th>
                                                                      <th>C1</th>
                                                                      <th>C2</th>
                                                                      <th>C3</th>
                                                                      <th>C4</th>
                                                                      <th>C5</th>
                                                                      <th>C6</th>

                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <tr>
                                                                      <?php
                                                                      foreach ($matriks_bobot as $hsil): ?>
                                                                      <tr>
                                                                             <td>
                                                                                    <?= $hsil['kode']; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c1'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c2'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c3'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c4'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c5'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?php $format = number_format($hsil['c6'], 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      </tr>
                                                               <?php endforeach; ?>
                                                               </tr>
                                                        </tbody>
                                                 </table>
                                          </div>
                                   </div>
                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="text-white bg-primary">
                                                        Solusi ideal positif (A+) dan solusi ideal negatif (A-)
                                                 </h5>
                                                 <table class="table table-bordered" style="text-align: center;">
                                                        <thead>
                                                               <tr>
                                                                      <th>Nilai</th>
                                                                      <th>C1</th>
                                                                      <th>C2</th>
                                                                      <th>C3</th>
                                                                      <th>C4</th>
                                                                      <th>C5</th>
                                                                      <th>C6</th>

                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <tr>
                                                                      <td>
                                                                             <?php echo "A+" ?>
                                                                      </td>
                                                                      <?php
                                                                      foreach ($max_c1 as $c1): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c1, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($max_c2 as $c2): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c2, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($max_c3 as $c3): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c3, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($min_c4 as $c4): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c4, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($max_c5 as $c5): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c5, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($min_c6 as $c6): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c6, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                               </tr>
                                                               <tr>
                                                                      <td>
                                                                             <?php echo "A-" ?>
                                                                      </td>
                                                                      <?php
                                                                      foreach ($min_c1 as $c1): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c1, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($min_c2 as $c2): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c2, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($min_c3 as $c3): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c3, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($max_c4 as $c4): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c4, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($min_c5 as $c5): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c5, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                                      <?php
                                                                      foreach ($max_c6 as $c6): ?>
                                                                             <td>
                                                                                    <?php $format = number_format($c6, 9);
                                                                                    echo $format; ?>
                                                                             </td>
                                                                      <?php endforeach; ?>
                                                               </tr>
                                                        </tbody>
                                                 </table>
                                          </div>
                                   </div>

                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="text-white bg-primary">
                                                        Jarak ideal positif (D+) dan jarak ideal negatif (D-)</h5>
                                                 <table class="table table-bordered" style="text-align: center;">
                                                        <thead>
                                                               <tr>
                                                                      <th>Alternatif</th>
                                                                      <th>D+</th>
                                                                      <th>D-</th>
                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <?php
                                                               $no = 0;
                                                               foreach ($dplus as $hsil): ?>
                                                                      <tr>
                                                                             <td>
                                                                                    <?= $hsil['kode'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?= $format = number_format($hasil_dplus[$no], 9) ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?= $format = number_format($hasil_dmin[$no], 9) ?>
                                                                             </td>
                                                                      </tr>
                                                                      <?php $no++; endforeach; ?>
                                                        </tbody>
                                                 </table>
                                          </div>
                                   </div>
                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="text-white bg-primary">
                                                        Hasil Preferensi</h5>
                                                 <table class="table table-bordered" style="text-align: center;">
                                                        <thead>
                                                               <tr>
                                                                      <th>Alternatif</th>
                                                                      <th>Model mobil</th>
                                                                      <th>Preverensi (V)</th>
                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <?php
                                                               // $no = 0;
                                                               foreach ($hasil_pref as $hsil): ?>
                                                                      <tr>
                                                                             <td>
                                                                                    <?= $hsil['kode'] ?>
                                                                             </td>
                                                                             <td>
                                                                                    <?= $hsil['model'] ?>
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
       </body>
</main>