<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('data'); ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('data/tampil_data_mobil'); ?>">
        <i class="bi bi-journal-text"></i>
        <span>Data mobil</span>
      </a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('data/kriteria'); ?>">
        <i class="bi bi-gem"></i><span>Kriteria</span></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('data/tampil_bobot_kriteria'); ?>">
        <i class="bi bi-card-list"></i><span>Bobot kriteria</span></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-car-front"></i><span>Alternatif</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= base_url('data/tampil_data_alternatif'); ?>">
            <i class="bi bi-circle"></i>
            <span>Showroom OLX</span>
          </a>
        </li>
      </ul>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= base_url('data/tampil_alternatif_rsm'); ?>">
            <i class="bi bi-circle"></i>
            <span>Showroom RSM</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#perhitungan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-calculator"></i><span>Perhitungan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="perhitungan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= base_url('perhitungan/proses_olx'); ?>">
            <i class="bi bi-circle"></i>
            <span>Showroom OLX</span>
          </a>
        </li>
      </ul>
      <ul id="perhitungan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= base_url('perhitungan/proses_rsm'); ?>">
            <i class="bi bi-circle"></i>
            <span>Showroom RSM</span>
          </a>
        </li>
      </ul>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('perhitungan/rangking'); ?>">
        <i class="bi bi-card-list"></i><span>Perangkingan</span></i>
      </a>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link collapse" href="<?= base_url('data/coba'); ?>">Coba aja</a>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#perangkingan-nav" data-bs-toggle="collapse" href="#">
        <i class="ri-arrow-up-down-fill"></i><span>Perangkingan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="perangkingan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= base_url('perhitungan/perangkingan_olx'); ?>">
            <i class="bi bi-circle"></i>
            <span>Showroom OLX</span>
          </a>
        </li>
      </ul>
      <ul id="perangkingan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= base_url('perhitungan/perangkingan_rsm'); ?>">
            <i class="bi bi-circle"></i>
            <span>Showroom RSM</span>
          </a>
        </li>
      </ul>
    </li> -->
    <!-- End Forms Nav -->
  </ul>

</aside><!-- End Sidebar-->