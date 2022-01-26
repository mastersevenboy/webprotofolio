<?php $this->load->view('layout/header'); ?>

<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url(); ?>Beranda">Beranda</a>
            </li>
            <li class="breadcrumb-item active">Manage</li>
          </ol>
<?php if ($this->session->userdata('level')=="Admin") { ?> 
          <!-- Icon Cards-->
        <div class="row">
            
            <div class="col-xl-6 col-sm-12 mb-6">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  <div class="mr-5">Manage User</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>User/Admin">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

            <div class="col-xl-6 col-sm-12 mb-6">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Manage Karyawan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>Karyawan">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

          </div>
<br>
<br>
<hr>
        <div class="row">
            
            <div class="col-xl-6 col-sm-12 mb-6">
              <div class="card text-white bg-info o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  <div class="mr-5">Manage Galeri</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>Galeri">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

            <div class="col-xl-6 col-sm-12 mb-6">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Manage Komentar</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>Beranda/Komentar">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

      </div>
<?php } ?>

</div>       
</div>

<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_script'); ?>
