
<!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Beranda">
        <i class="fas fa-fw fa-home"></i>
        <span>Beranda</span>
      </a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link" href="<?php echo base_url();?>Beranda/profil">
        <i class="fas fa-fw fa-folder"></i>
        <span>Profil</span>
      </a>
    </li>
    <hr>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>User</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="<?php echo base_url(); ?>User/Admin">Admin</a>
       <!--  <a class="dropdown-item" href="<?php echo base_url(); ?>User/Pengguna">Pengguna</a> -->
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link" href="<?php echo base_url(); ?>Karyawan/data">
        <i class="fas fa-fw fa-folder"></i>
        <span>Karyawan</span>
      </a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link" href="<?php echo base_url(); ?>Beranda/Komentar">
        <i class="fas fa-fw fa-folder"></i>
        <span>Komentar</span>
      </a>
    </li>

    <hr>
    <li class="nav-item dropdown">
      <a class="nav-link" href="<?php echo base_url(); ?>Beranda/slider">
        <i class="fas fa-fw fa-folder"></i>
        <span>Tampilan Silder</span>
      </a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Galeri</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="<?php echo base_url(); ?>Galeri/barang">Barang</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>Galeri/toko">Toko</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Kategori</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="<?php echo base_url(); ?>Kategori/barang">Kategori Barang</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>Kategori/toko">Kategori Toko</a>
      </div>
    </li>

    
  </ul>


