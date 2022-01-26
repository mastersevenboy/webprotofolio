<?php $this->load->view('layout/header'); ?>

<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url(); ?>Beranda">Dashbord</a>
            </li>
            <li class="breadcrumb-item active">Slider</li>
            <li class="breadcrumb-item active">Ukuran untuk gambar 1920 x 920</li>
          </ol>

          <?php echo $this->session->flashdata('message'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <!-- <div class="card-header">
              <a href="#form" data-toggle="modal" data-target="#tambahmodal" class="btn btn-primary">Tambah Data</a>
            </div>
 -->            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align:center;width:20px;">No</th>
                      <th>Nama</th>
                      <th>Tampilan Slider</th>
                      <th width="10%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody">
                    <?php $no=1; foreach($slider as $row): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td align="center"><img height="250px" width="300px" alt="<?= $row->slide; ?>" src="<?= base_url(); ?>./assets/adds/images/slider/<?= $row->slide; ?>"></td>
                      <td align="center">
                        <div class="modal-footer info-md">
                          <button type="button" id="btn-edit" data-toggle="modal" data-target="#edit<?php echo $row->id;?>" class="btn btn-primary">Edit</button>
                          <!-- <button data-toggle="modal" data-target="#hapus<?php echo $row->id;?>" class="btn btn-danger">Hapus</button> -->
                        </div>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <!-- Sticky Footer -->
        <!-- <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2019 Aplikasi </span>
            </div>
          </div>
        </footer> -->
      </div>
      <!-- /.content-wrapper -->
    </div>

<?php foreach($slider as $row) { ?>
        <div class="modal fade" id="hapus<?php echo $row->id;?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url();?>Beranda/h_slider/<?php echo $row->id;?>" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Konfirmasi hapus</h4>
                        </div>
                        <div class="modal-body">
                            <font color="red" size="3">Apakah Data akan dihapus ?</font>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">Hapus</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<div class="modal fade" id="edit<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" class="modal modal-edu-general fullwidth-popup-InformationproModal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-2">
                <h4 class="modal-title" id="judul"></h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal"><i class="fa fa-close"></i>x</a>
                </div>
            </div>
            <form action="<?php echo base_url(); ?>Beranda/s_update/<?php echo $row->id;?>" method="POST" id="form_validation" enctype="multipart/form-data">
            <!-- <input type="hidden" name="id_guru" value=""> -->
            <div class="modal-body">
            
              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"></div>
                <div class="col-12 col-md-9"><img  height="200px" width="200px" alt="<?= $row->slide; ?>" src="<?= base_url() ?>./assets/adds/images/slider/<?= $row->slide; ?>" class="rounded-circle">

                  <input data-toggle="tooltip" data-placement="top" title="" data-original-title="" name="filelama" value="<?=$row->slide?>" type="hidden" class="form-control date" placeholder="">
                </div>
              </div>

              <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Nama Slider</label></div>
                  <div class="col-12 col-md-9">
                   <!--  <select name="nama" id="nama" class="form-control form-control-user" title="Pilih nama slider" readonly>
                      <?php if ($row->nama == 'Slider 1'){
                        echo '<option value="Slider 1" selected>Slider 1</option>
                              <option value="Slider 2">Slider 2</option> 
                              <option value="Slider 3">Slider 3</option>'
                              ;
                      }elseif ($row->nama == 'Slider 2') {
                        echo '<option value="Slider 1">Slider 1</option>
                              <option value="Slider 2" selected>Slider 2</option> 
                              <option value="Slider 3">Slider 3</option>'
                              ;
                      }
                      else{
                       echo '<option value="Slider 1">Slider 1</option>
                              <option value="Slider 2">Slider 2</option> 
                              <option value="Slider 3" selected>Slider 3</option>';
                       }?>
                    </select> -->
                    <input data-toggle="tooltip" data-placement="top" title="" value="<?php echo $row->nama ?>" type="text" class="form-control date" name="nama" readonly>
                  </div>
                </div> 


              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"><label for="select" class="form-control-label">Foto Slider</label></div>
                <div class="col-12 col-md-9"><input data-toggle="tooltip" data-placement="top" title="" data-original-title="Pilih Foto maks. 1024 Kb" type="file" class="form-control date" placeholder="Pilih Foto maks. 1024 Kb" name="input_gambar" id="file-input">
                </div>
              </div>

            </div>
            <div class="modal-footer info-md">
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <button  data-dismiss="modal" class="btn btn-primary">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_script'); ?>
