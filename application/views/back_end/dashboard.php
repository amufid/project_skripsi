<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">
          <div class="col-xxl-4 col-md-6 text-center">
            <div class="card info-card sales-card">
              <div class="card-body ">
                <h5 class="card-title ">Stok mobil Showroom OLX<span></span></h5>
                <div class="d-flex align-items-center ">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-car-front"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php echo $data_alternatif ?>
                    </h6>
                    <span class="text-success small pt-1 fw-bold">Unit</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-md-6 text-center">
            <div class="card info-card sales-card">
              <div class="card-body ">
                <h5 class="card-title ">Stok mobil Showroom RSM<span></span></h5>
                <div class="d-flex align-items-center ">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-car-front"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php echo $alternatif_rsm ?>
                    </h6>
                    <span class="text-success small pt-1 fw-bold">Unit</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-md-6 text-center">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Kriteria</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-gem"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php echo $kriteria ?>
                    </h6>
                    <span class="text-success small pt-1 fw-bold">Kriteria</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>