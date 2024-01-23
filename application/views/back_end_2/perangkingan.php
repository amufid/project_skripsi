<main id="main" class="main">
       <div class="pagetitle">
              <h1>Perangkingan</h1>
              <nav>
                     <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Perangkingan</li>
                            <li class="breadcrumb-item active">Showroom RSM</li>
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

       <body>
              <section class="section">
                     <div class="row text-center">
                            <div class="col-lg-12">
                                   <div class="card">
                                          <div class="card-body">
                                                 <br>
                                                 <h5 class="text-white bg-primary">
                                                        Hasil Perangkingan</h5>
                                                 <table class="table table-bordered" style="text-align: center;">
                                                        <thead>
                                                               <tr>
                                                                      <th>Alternatif</th>
                                                                      <th>Merk</th>
                                                                      <th>Model</th>
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
                                                                                    <?= $hsil['merk'] ?>
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
                            </div>
                     </div>
              </section>
       </body>
</main>