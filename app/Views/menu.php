<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed"  href="dashboard">
        <i class="bi bi-house-door"></i>
        <span>Beranda</span>
      </a>
    </li><!-- End Home Nav -->

    <?php if (session()->get('level') == 1 || session()->get('level') == 2): ?>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#master-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-basket"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="master-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="menu">
            <i class="bi bi-circle"></i><span>Menu Makanan</span>
          </a>
        </li>
      <li>
          <a href="kur">
            <i class="bi bi-circle"></i><span>Kurir</span>
          </a>
        </li>
        <li>
          <a href="cus">
            <i class="bi bi-circle"></i><span>Pelanggan</span>
          </a>
        </li>
        <li>
          <a href="kry">
            <i class="bi bi-circle"></i><span>Karyawan</span>
          </a>
        </li>
        <li>
          <a href="user">
            <i class="bi bi-circle"></i><span>User</span>s
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
    <a class="nav-link collapsed"  href="order">
      <i class="bi bi-cart2"></i>
      <span>Pesanan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed"  href="cetak">
      <i class="bi bi-clipboard"></i>
      <span>Laporan</span>
    </a>
  </li>
  <?php endif; ?>


<?php if (session()->get('level') == 0 ||session()->get('level') == 1 || session()->get('level') == 3 || session()->get('level') == 4): ?>
   <li class="nav-item">
    <a class="nav-link collapsed"  href="ordercust">
      <i class="bi bi-cart2"></i>
      <span>List Pesanan</span>
    </a>
  </li>
  <?php endif; ?>


  <li class="nav-heading">Halaman Pengguna</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="profile">
      <i class="bi bi-person-circle"></i>
      <span>Profil</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-faq.html">
      <i class="bi bi-question-circle"></i>
      <span>Bantuan & FAQ</span>
    </a>
  </li><!-- End Help & FAQ Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-contact.html">
      <i class="bi bi-chat-dots"></i>
      <span>Kontak Dukungan</span>
    </a>
  </li><!-- End Contact Support Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
      <i class="bi bi-person-plus"></i>
      <span>Daftar</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/home/logout">
      <i class="bi bi-box-arrow-right"></i>
      <span>Keluar</span>
    </a>
  </li><!-- End Logout Nav -->
</ul>

</aside><!-- End Sidebar -->
